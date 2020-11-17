<?php

namespace App\Http\Livewire;

use App\Mail\MenteeAppRequestEmail;
use App\Mail\MentorNewMeetingEmail;
use App\Models\NewSchedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MentorNewMeeting extends Component
{
    public $topic;
    public $details;
    public $platform;
    public $date;
    public $hour;
    public $minute;
    public $link;
    public $meeting_id;
    public $passcode;

    public $user;
    public $conn;

    public function mount(){
        $this->conn = Session::get('conn');;
    }
    public function updated($field){
        $this->validateOnly($field, [
            'topic'      => 'required|max:255',
            'details'    => 'required|max:600',
            'platform'   => 'required|max:255',
            'date'       => 'required|max:255',
            'hour'       => 'required|max:255',
            'minute'     => 'required|max:255',
            'link'       => 'required|max:2000|unique:new_schedules,link',
            'meeting_id' => 'required|max:255|unique:new_schedules,meeting_id',
            'passcode'   => 'required|max:255',

        ]);

    }

    public function newMeeting(){
        $this->validate([
            'topic'      => 'required|max:255',
            'details'    => 'required|max:600',
            'platform'   => 'required|max:255',
            'date'       => 'required|max:255',
            'hour'       => 'required|max:255',
            'minute'     => 'required|max:255',
            'link'       => 'required|max:2000||unique:new_schedules,link',
            'meeting_id' => 'required|max:255|unique:new_schedules,meeting_id',
            'passcode'   => 'required|max:255',
        ]);

        //Formatting the inputted data for database and mailing.

        $schedule = NewSchedule::create([
            'topic'        => $this->topic,
            'details'      => $this->details,
            'platform'     => $this->platform,
            'date'         => $this->date,
            'start_time'   => $this->hour . ':'. $this->minute,
            'link'         => $this->link,
            'meeting_id'   => $this->meeting_id,
            'passcode'     => $this->passcode,
            'mentor_id'    => $this->conn->mentor_id,
            'mentee_id'    => $this->conn->mentee_id,
            'connect_id'   => $this->conn->id,
            'initiator_id' => Auth::user()->id,
        ]);

        //Discarding user input
        $this->emit('alert', ['type' => 'success', 'message' => 'Meeting Initiated Successfully.']);

        //Mails mentee concerning the request
        $data = [
            'email'         => $this->conn->mentee->email,
            'name'          => $this->conn->mentee->name,
            'mentor_name'   => Auth::user()->name,
            'platform'      => $this->platform,
            'topic'         => $this->topic,
            'details'       => $this->details,
            'link'          => $this->link,
            'meeting_date'  => $this->date. ' | ' . $this->hour . ':'. $this->minute,
            'meeting_id'    => $this->meeting_id,
            'passcode'      => $this->passcode,
            'date_and_time' => Carbon::now()->format('d M Y'). ', '. Carbon::now()->format('h:iA'),
        ];
        Mail::to($this->conn->mentee->email)->send(new MentorNewMeetingEmail($data));
        $this->discard();
    }

    public function discard(){
      $this->topic      = '';
      $this->details    = '';
      $this->platform   = '';
      $this->date       = '';
      $this->meeting_id = '';
      $this->link       = '';
      $this->passcode   = '';
    }

    public function render()
    {
        return view('livewire.mentor.app.mentor-new-meeting');
    }
}
