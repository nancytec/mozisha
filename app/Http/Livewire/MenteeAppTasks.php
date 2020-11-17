<?php

namespace App\Http\Livewire;

use App\Mail\MenteeTaskResponseEmail;
use App\Mail\MenteeTaskResponseUpdateEmail;
use App\Mail\MentorResponseRatingEmail;
use App\Models\DutyRating;
use App\Models\DutyResponse;
use App\Models\PeriodicDuty;
use App\Models\ResponseReply;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class MenteeAppTasks extends Component

{
    use WithFileUploads;

    public $user;
    public $conn;
    public $tasks;

    public $showTasks = true;
    public $viewTask  = false;

    public $task_id;
    public $task;


    //response properties
    public $title;
    public $details;
    public $link_1;
    public $link_2;
    public $attach;
    public $attach_name;



    //Response parameters
    public $response;
    public $rating;

    public $curr_rating;

    //Response reply parametes
    public $reply;
    public $replies;

    public function fetchTaskView($task_id){
        $this->task = PeriodicDuty::where('id', $task_id)->first();
        $this->fetchResponse($task_id); //fetch responses

    }

    public function fetchRating(){
        if ($this->response){
            $this->curr_rating =  DutyRating::where('response_id', $this->response->id)->first();
        }

    }

    public function fetchResponse($task_id){
        $this->response = DutyResponse::where('duty_id', $task_id)->first();

        if($this->response){
            //Details of the edit form.
            $this->title       = $this->response->title;
            $this->details     = $this->response->details;
            $this->link_1      = $this->response->link_1;
            $this->link_2      = $this->response->link_2;
            $this->attach_name = $this->response->file_original_name;
        }
    }

    public function updated($field){
        $this->validateOnly($field, [
            'title'   => 'required|max:255',
            'details'=> 'required|max:4000',
            'link_1' => 'nullable|max:255',
            'link_2' => 'nullable|max:255',
            'attach' => 'nullable|mimes:jpg,jpeg, doc,docx,pdf,mp4,mp3|max:20000'
        ]);
    }

    public function addResponse(){
        $this->validate([
            'title'  => 'required|max:255',
            'details'=> 'required|max:4000',
            'link_1' => 'nullable|max:255',
            'link_2' => 'nullable|max:255',
            'attach' => 'nullable|mimes:jpg,jpeg,doc,docx,pdf,mp4,mp3|max:20000'
        ]);

        //Check if file is supplied, then store it
        if ($this->attach){
            //Check for old file
            $data = DutyResponse::where('duty_id', $this->task->id)->first();
            if ($data){ //if record exist
                if ($data->file){
                    $this->deleteOldFile($data->file);
                }
                $attach = $this->storeFile();
            }else{ //If no response record
                $attach = $this->storeFile();
            }


        }else{
            $attach = [
                'name'          => null,
                'original_name' => null,
            ];
        }

        $response = DutyResponse::where('duty_id', $this->task->id)->count();
        if($response > 0){
            DutyResponse::where('duty_id', $this->task->id)->update([
                'title'              => $this->title,
                'details'            => $this->details,
                'link_1'             => $this->link_1,
                'link_2'             => $this->link_2,
                'file'               => $attach['name'],
                'file_original_name' => $attach['original_name'],
            ]);

            $this->fetchResponse($this->task->id);
            $this->emit('alert', ['type' => 'success', 'message' => 'Response updated successfully.']);
            //Mail the Mentor concerning the response update
            $data = [
                'email'            => $this->user->email,
                'name'             => $this->user->name,
                'mentee_name'      => $this->conn->mentee->name,
                'app_name'         => $this->conn->apprenticeship->title,
                'response_title'   => $this->response->title,
                'response_details' => Str::limit($this->response->details, $limit = 100, $end = '...'),
                'task_title'       => $this->title,
                'date_and_time'    => Carbon::now()->format('d M Y'). ', '. Carbon::now()->format('h:iA'),
            ];
            Mail::to($this->user->email)->send(new MenteeTaskResponseUpdateEmail($data));
        }else{
            DutyResponse::create([
                'title'              => $this->title,
                'details'            => $this->details,
                'link_1'             => $this->link_1,
                'link_2'             => $this->link_2,
                'duty_id'            => $this->task->id,
                'mentor_id'          => $this->task->mentor_id,
                'mentee_id'          => $this->task->mentee_id,
                'connect_id'         => $this->task->connect_id,
                'file'               => $attach['name'],
                'file_original_name' => $attach['original_name'],
            ]);

            $this->fetchResponse($this->task->id);
            $this->emit('alert', ['type' => 'success', 'message' => 'Response submitted successfully.']);
            //Mail the Mentor concerning the new task
            $data = [
                'email'            => $this->user->email,
                'name'             => $this->user->name,
                'mentee_name'      => $this->conn->mentee->name,
                'app_name'         => $this->conn->apprenticeship->title,
                'response_title'   => $this->response->title,
                'response_details' => Str::limit($this->response->details, $limit = 100, $end = '...'),
                'task_title'       => $this->title,
                'date_and_time'    => Carbon::now()->format('d M Y'). ', '. Carbon::now()->format('h:iA'),
            ];
            Mail::to($this->user->email)->send(new MenteeTaskResponseEmail($data));

        }


    }

    public function removeResponse(){
        PeriodicDuty::where('id', $this->id)->delete();
        //delete all responses and replies

        $this->emit('alert', ['type' => 'success', 'message' => 'Task updated successfully.']);
        $this->showTasks();
    }


    public function removeFile(){

    }

    public function showTasks(){
        $this->showTasks = true;
        $this->viewTask  = false;
    }

    public function backToList(){
        $this->showTasks();
    }

    public function viewTask($task_id){
        $this->showTasks = false;
        $this->viewTask  = true;
        $this->fetchTaskView($task_id);
        $this->fetchRating();
        $this->fetchReplies();
    }

    public function sendReply(){
        $this->validate([
            'reply' => 'required|max:2000',
        ]);
        ResponseReply::create([
            'mentor_id'   => $this->response->mentor_id,
            'mentee_id'   => $this->response->mentee_id,
            'connect_id'  => $this->response->connect_id,
            'response_id' => $this->response->id,
            'sender_id'   => Auth::user()->id,
            'reply'       => $this->reply,
        ]);
        $this->reply = '';
        $this->fetchReplies();
        $this->emit('alert', ['type' => 'success', 'message' => 'Message sent.']);
    }

    public function fetchReplies(){

        if($this->response){ //checks if there is a response on the task.
            $this->replies = ResponseReply::where('response_id', $this->response->id)->get();
        }

    }

    public function mount($conn){
        $this->conn = $conn;
        $this->user = $conn->mentor;
        $this->fetchTasks();
    }


    public function fetchTasks(){
        $this->tasks = PeriodicDuty::orderBy('id', 'DESC')->where('connect_id', $this->conn->id)->get();
    }


    public function storeFile()
    {

        $file =  $this->attach;
        $original_filename = $file->getClientOriginalName();
        $filename = time() .Str::random(50).'_'.$original_filename;

        $path = $file->storeAs('public', $filename);

        $fileData =
            [
                'name'          => $filename,
                'original_name' => $original_filename,
            ];

        return $fileData;
    }

    protected function deleteOldFile($filename){
        Storage::delete('/public/'.$filename);
    }

    public function render()
    {
        return view('livewire.mentee.app.mentee-app-tasks');
    }
}
