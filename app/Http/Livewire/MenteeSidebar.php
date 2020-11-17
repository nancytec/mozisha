<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\ApprenticeDuty;
use App\Models\ApprenticeHelp;
use App\Models\CompanyInfo;
use App\Models\FamiliarTool;
use App\Models\Language;
use App\Models\NeededExperience;
use App\Models\NeededIndustry;
use App\Models\PersonalInterest;
use App\Models\UserDetail;
use App\Models\UserEducation;
use App\Models\UserWorkExperience;
use Livewire\Component;

class MenteeSidebar extends Component
{
    public $user;

    public $details_c;
    public $about_c;
    public $education_c;
    public $workExperience_c;
    public $tool_c;
    public $industry_c;
    public $language_c;
    public $neededExperience_c;
    public $interest_c;



    public $details_s;
    public $about_s;
    public $education_s;
    public $workExperience_s;
    public $tool_s;
    public $industry_s;
    public $language_s;
    public $neededExperience_s;
    public $interest_s;


    public $percentage_profile;

    public function mount($user){
        $this->user = $user;
        $this->details_s          = $this->details();
        $this->language_s         = $this->language();
        $this->interest_s         = $this->interest();
        $this->about_s            = $this->about();
        $this->education_s        = $this->education();
        $this->workExperience_s   = $this->workExperience();
        $this->tool_s             = $this->tool();
        $this->industry_s         = $this->industry();
        $this->neededExperience_s = $this->neededExperience();
        $this->percentage_profile = ceil($this->calculatePercentProfile());

    }

    public function calculatePercentProfile(){

        $this->details_s  = $this->details_s  * 10;
        $this->language_s = $this->language_s * 10;
        $this->interest_s = $this->interest_s * 10;
        $this->about_s    = $this->about_s    * 10;
        $this->education_s = $this->education_s * 10;
        $this->workExperience_s = $this->workExperience_s * 10;
        $this->tool_s = $this->tool_s * 10;
        $this->industry_s = $this->industry_s * 10;
        $this->neededExperience_s = $this->neededExperience_s * 10;


        $total = $this->details_s + $this->language_s + $this->interest_s + $this->about_s
            + $this->education_s + $this->workExperience_s + $this->tool_s + $this->industry_s
            + $this->neededExperience_s;
        $percentage = ($total / 90) * 100;

        return $percentage;

    }



    public function education(){
        return UserEducation::where('user_id', $this->user->id)->count();
    }

    public function workExperience(){
        return UserWorkExperience::where('user_id', $this->user->id)->count();
    }

    public function tool(){
        return FamiliarTool::where('user_id', $this->user->id)->count();
    }

    public function industry(){
        return NeededIndustry::where('user_id', $this->user->id)->count();
    }

    public function neededExperience(){
        return NeededExperience::where('user_id', $this->user->id)->count();
    }


    public function details(){
        return  UserDetail::where('user_id', $this->user->id)->count();
    }

    public function language(){
        return Language::where('user_id', $this->user->id)->count();
    }

    public function interest(){
        return PersonalInterest::where('user_id', $this->user->id)->count();
    }

    public function about(){
        return About::where('user_id', $this->user->id)->count();
    }




    public function render()
    {
        return view('livewire.mentee.mentee-sidebar');
    }
}
