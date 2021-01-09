<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\ApprenticeDuty;
use App\Models\ApprenticeHelp;
use App\Models\Apprenticeship;
use App\Models\CompanyInfo;
use App\Models\Language;
use App\Models\PersonalInterest;
use App\Models\UserDetail;
use Livewire\Component;

class NewApprenticeship extends Component
{
    public $user;
    public $apprenticeships;
    public $title;
    public $start_month;
    public $start_year;
    public $end_month;
    public $end_year;
    public $details;
    public $apprentice_period;
    public $mentorship_period;
    public $company;
    public $helps;


    public $aprD_c;
    public $aprH_c;
    public $details_c;
    public $company_c;
    public $language_c;
    public $interest_c;
    public $about_c;


    public function mount($user){
        $this->user = $user;
        $this->refresh();
    }

    protected $listeners = ['refresh' => 'refresh'];

    public function refresh(){
        $this->fetchApprenticeships();
        $this->fetchCompany();
        $this->fetchApprenticeHelp();
        $this->aprD_c       = $this->apprenticeDuty();
        $this->aprH_c       = $this->apprenticeHelp();
        $this->details_c    = $this->details();
        $this->company_c    = $this->company();
        $this->language_c   = $this->language();
        $this->interest_c   = $this->interest();
        $this->about_c      = $this->about();
    }

    public function fetchCompany(){
        $this->company = CompanyInfo::where('user_id', $this->user->id)->first();
    }

    public function fetchApprenticeships(){
        $this->apprenticeships = ApprenticeDuty::where('user_id', $this->user->id)->get();
    }

    public function fetchApprenticeHelp(){
        $helps = ApprenticeHelp::where('user_id', $this->user->id)->get();
        foreach ($helps as $help){
            $help = ' '. $help .', ';
        }
       // $this->helps = $help;
    }

    public function validated($field){
        $this->validateOnly($field, [
            'title'                 => 'required|max:255',
            'start_month'           => 'required|max:255',
            'start_year'            => 'required|max:255',
            'end_month'             => 'required|max:255',
            'end_year'              => 'required|max:255',
            'details'               => 'required|max:2000',
            'mentorship_period'     => 'required|max:255',
            'apprentice_period'     => 'required|max:255',
        ]);
    }

    public function newApprenticeship(){
        $this->validate([
            'title'                 => 'required|max:255',
            'start_month'           => 'required|max:255',
            'start_year'            => 'required|max:255',
            'end_month'             => 'required|max:255',
            'end_year'              => 'required|max:255',
            'details'               => 'required|max:2000',
            'mentorship_period'     => 'required|max:255',
            'apprentice_period'     => 'required|max:255',
        ]);

        $apr = Apprenticeship::where(['user_id' => $this->user->id, 'title' => $this->title])->count();
        if($apr < 1){
            Apprenticeship::create([
                'title'              => $this->title,
                'details'            => $this->details,
                'company'            => $this->company->name,
                'start_month'        => $this->start_month,
                'start_year'         => $this->start_year,
                'end_month'          => $this->end_month,
                'end_year'           => $this->end_year,
                'apprentice_period'  => $this->apprentice_period,
                'mentor_period'      => $this->mentorship_period,
                'apprentice_service' => 'Not needed',
                'mentor_name'        => $this->user->name,
                'user_id'            => $this->user->id,
            ]);

            $this->discard();
            $this->emit('alert', ['type' => 'success', 'message' => 'Apprenticeship posted.']);

        }else{

            $this->emit('alert', ['type' => 'warning', 'message' => 'Apprenticeship already posted.']);
        }

    }




    public function details(){
        return  UserDetail::where('user_id', $this->user->id)->count();
    }

    public function company(){
        return CompanyInfo::where('user_id', $this->user->id)->count();
    }

    public function apprenticeDuty(){
        return ApprenticeDuty::where('user_id', $this->user->id)->count();
    }

    public function apprenticeHelp(){
        return ApprenticeHelp::where('user_id', $this->user->id)->count();
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

    public function discard(){
        $this->title = '';
        $this->details = '';
    }

    public function render()
    {
        if($this->aprD_c < 1 || $this->aprH_c < 1 || $this->details_c < 1 ||
            $this->company_c < 1 || $this->language_c < 1 || $this->interest_c < 1 ||
            $this->about_c > 1
        ){
            return view('livewire.mentor.update-request');
        }else{
            return view('livewire.mentor.new-apprenticeship');
        }

    }
}
