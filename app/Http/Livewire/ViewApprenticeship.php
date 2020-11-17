<?php

namespace App\Http\Livewire;

use App\Mail\MenteeAppRequestEmail;
use App\Mail\MenteeCreateAccountEmail;
use App\Mail\MentorAppRequestEmail;
use App\Models\About;
use App\Models\ApprenticeDuty;
use App\Models\ApprenticeHelp;
use App\Models\Apprenticeship;
use App\Models\CompanyInfo;
use App\Models\Language;
use App\Models\PersonalInterest;
use App\Models\PersonalAccomplishment as MyAccomplishment;
use App\Models\Request;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ViewApprenticeship extends Component
{
    public $app;
    public $user;
    public $details;
    public $company;
    public $appDuty;
    public $appHelp;
    public $language;
    public $interest;
    public $about;
    public $accomp;

    public $app_user;
    public $status;


    public function mount($user, $app){
        $this->user = $user;
        $this->app  = $app;
        $this->app_user = User::find($app->user_id);

        $this->details();
        $this->company();
        $this->apprenticeDuty();
        $this->apprenticeHelp();
        $this->language();
        $this->language();
        $this->interest();
        $this->about();
        $this->accomplishments();

        //Fetch if application has already been submitted
        $this->status = Request::where(['mentee_id' => Auth::user()->id, 'mentor_id' => $this->app_user->id])->count();
    }

    public function details(){
         $this ->details =  UserDetail::where('user_id', $this->app_user->id)->first();
    }

    public function company(){
        $this->company = CompanyInfo::where('user_id', $this->app_user->id)->first();
    }

    public function apprenticeDuty(){
        $this->appDuty = ApprenticeDuty::where('user_id', $this->app_user->id)->get();
    }

    public function apprenticeHelp(){
        $this->appHelp = ApprenticeHelp::where('user_id', $this->app_user->id)->get();
    }

    public function language(){
        $this->language =  Language::where('user_id', $this->app_user->id)->get();
    }

    public function interest(){
        $this->interest =  PersonalInterest::where('user_id', $this->app_user->id)->get();
    }

    public function about(){
        $this->about = About::where('user_id', $this->app_user->id)->first();
    }

    public function accomplishments(){
        $this->accomp = MyAccomplishment::where('user_id', $this->app_user->id)->get();
    }


    /*
     *
     * Application processing methods
     *
     * @EazyApply Button
     *
     */

    public function apply(){
        //Fetch if application has already been submitted
       $request =  Request::where(['mentee_id' => Auth::user()->id, 'mentor_id' => $this->app_user->id])->count();
       if($request > 0){
           $this->emit('alert', ['type' => 'info', 'message' => 'You already applied for this apprenticeship.']);
       }else{
           Request::create([
               'mentee_id'          => Auth::user()->id,
               'mentor_id'          => $this->app_user->id,
               'apprenticeship_id'  => $this->app->id,
               'status'             => 'Pending',

           ]);
           //Fetch apprentice request

           try {
               //Mails mentee concerning the request
               $data = [
                   'email'         => Auth::user()->email,
                   'name'          => Auth::user()->name,
                   'app_name'      => $this->app->title,
                   'date_and_time' => Carbon::now()->format('d M Y'). ', '. Carbon::now()->format('h:iA'),
               ];
               Mail::to($this->app_user->email)->send(new MenteeAppRequestEmail($data));

               //Mails mentor concerning the request
               $data = [
                   'email'         => $this->user->email,
                   'name'          => $this->user->name,
                   'app_name'      => $this->app->title,
                   'date_and_time' => Carbon::now()->format('d M Y'). ', '. Carbon::now()->format('h:iA'),
               ];
               Mail::to($this->app_user->email)->send(new MentorAppRequestEmail($data));


           }catch (\Exception $e){

           }

           return redirect('/apprenticeship/'.$this->app->id.'/success');
       }
    }


    public function render()
    {
        return view('livewire.mentee.view-apprenticeship');
    }
}
