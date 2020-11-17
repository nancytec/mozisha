<?php

namespace App\Http\Livewire;

use App\Models\DutyResponse;
use App\Models\NewSchedule;
use App\Models\PeriodicDuty;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MentorAppDashboard extends Component
{

    public $user;
    public $showDashboard    = true;
    public $showSetGoal      = false;
    public $showNewTask      = false;
    public $showAllTask      = false;
    public $showResponses    = false;
    public $showAppProfile   = false;
    public $showViewTask     = false;
    public $showAppointments = false;

    public $conn;
    public $task_id;

    //Counters
    public $taskNo;
    public $appointmentNo;
    public $responseNo;

    public function countTask(){
       $this->taskNo =  PeriodicDuty::where('connect_id', $this->conn->id)->count();
    }

    public function countResponse(){
        $this->responseNo =  DutyResponse::where('connect_id', $this->conn->id)->count();
    }

    public function countAppointments(){
        $this->appointmentNo =  NewSchedule::where(['connect_id' => $this->conn->id, 'status' => 'Active'])->count();
    }

    public function mount($conn){
        $this->conn = $conn;
        $this->user = $conn->mentee;
        Session::put('conn', $conn);

        //Initializing counters
        $this->countTask();
        $this->countResponse();
        $this->countAppointments();
    }

    /*
     *Toggle Scenes functions
     *
     */
    public function showDashboard(){
        $this->showDashboard    = true;
        $this->showSetGoal      = false;
        $this->showNewTask      = false;
        $this->showAllTask      = false;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = false;
    }

    public function showSetGoal(){
        $this->showDashboard    = false;
        $this->showSetGoal      = true;
        $this->showNewTask      = false;
        $this->showAllTask      = false;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = false;
    }

    public function showNewTask(){
        $this->showDashboard    = false;
        $this->showSetGoal      = false;
        $this->showNewTask      = true;
        $this->showAllTask      = false;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = false;
    }

    public function showAllTask(){
        $this->showDashboard    = false;
        $this->showSetGoal      = false;
        $this->showNewTask      = false;
        $this->showAllTask      = true;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = false;
    }

    public function showViewTask($task_id){
        $this->task_id          = $task_id;
        $this->showDashboard    = false;
        $this->showSetGoal      = false;
        $this->showNewTask      = false;
        $this->showAllTask      = false;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = true;
        $this->showAppointments = false;
    }

    public function showResponses(){
        $this->showDashboard    = false;
        $this->showSetGoal      = false;
        $this->showNewTask      = false;
        $this->showAllTask      = false;
        $this->showResponses    = true;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = false;
    }

    public function showAppointments(){
        $this->showDashboard    = false;
        $this->showSetGoal      = false;
        $this->showNewTask      = false;
        $this->showAllTask      = false;
        $this->showResponses    = false;
        $this->showAppProfile   = false;
        $this->showViewTask     = false;
        $this->showAppointments = true;
    }







    public function render()
    {
        return view('livewire.mentor.app.mentor-app-dashboard');
    }
}
