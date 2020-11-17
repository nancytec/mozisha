<?php

namespace App\Http\Livewire;

use App\Models\Connect;
use App\Models\NewSchedule;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MentorDashboard extends Component
{

    public $user;
    public $showApps     = true;
    public $showRequests = false;

    /*All Mentees*/
    public $connects;
    public $status;

    /*All Requests*/
    public $requests;

    public $appointmentNo;
    public $menteeNo;
    public $requestNo;

    public function countAppointments(){
        $this->appointmentNo = NewSchedule::where(['mentor_id' => Auth::user()->id, 'status' => 'Active'])->count();
    }

    public function countMentee(){
        $this->menteeNo = Connect::where(['mentor_id' => Auth::user()->id, 'status' => 'Active'])->count();
    }
    public function countRequests(){
        $this->requestNo = Request::where(['mentor_id' => Auth::user()->id, 'status' => 'Pending'])->count();
    }


    public function mount($user){
        $this->user = $user;
        $this->fetchConnects();
        $this->fetchRequests();
        $this->countAppointments();
        $this->countMentee();
        $this->countRequests();
    }

    public function updated(){
            $this->connects = Connect::where(['mentor_id' => Auth::user()->id, 'status' => $this->status])->get();
    }

    public function fetchRequests(){
        $this->requests = Request::where(['mentor_id' => Auth::user()->id, 'status' => 'Pending'])->get();
    }

    public function fetchConnects(){ //All Apprentices
        $this->connects = Connect::where('mentor_id', Auth::user()->id)->get();
    }


    /**
     * Display toggle functions
     */


    public function showApps(){
        $this->showRequests   = false;
        $this->showApps       = true;

    }

    public function showRequests(){
        $this->showRequests = true;
        $this->showApps     = false;;
    }

    public function render()
    {
        return view('livewire.mentor.mentor-dashboard');
    }
}
