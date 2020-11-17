<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Social;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $social;
    private $setting;


    public function __construct()
    {
        $this->social = Social::latest()->first(); //fetches the last record
        $this->setting = Setting::latest()->first(); //fetches the last record

    }



    use AuthenticatesUsers;


    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $googleUser = User::where('google_id', $user->id)->first(); //Check for google users

            if ($googleUser) {
                    Auth::login($googleUser);
//                   $this->authenticated($googleUser); //Redirects to the appropriate routes
                    if(Auth::user()->hasRole('mentor')){
                        return redirect()->route('mentor.dashboard');
                    }

                    if(Auth::user()->hasRole('mentee')){
                        return redirect()->route('mentee.dashboard');
                    }

                    if(Auth::user()->hasRole('administrator')){
                        return redirect()->route('admin.home');
                    }

                    if(Auth::user()->hasRole('superadministrator')){
                        return redirect()->route('admin.home');
                    }

                    if(Auth::user()->hasRole('developer')){
                        return redirect()->route('admin.home');
                    }
            } else {

                //check if the user is registered without google, the create google_id
                $localUserCount = User::where('email', $user->email)->count();
               // $localUser = User::where('email', $user->email)->first(); //Check for google users
                if($localUserCount > 0){
                    $newUser = User::where('email', $user->email)->update([
                        'google_id' => $user->id,
                 ]);
                  $googleUser = User::where('google_id', $user->id)->first(); //Check for google users
                  Auth::login($googleUser);
//                  $this->authenticated($googleUser); //Redirects to the appropriate routes
                    if(Auth::user()->hasRole('mentor')){
                        return redirect()->route('mentor.dashboard');
                    }
                    if(Auth::user()->hasRole('mentee')){
                        return redirect()->route('mentee.dashboard');
                    }
                    if(Auth::user()->hasRole('administrator')){
                        return redirect()->route('admin.home');
                    }

                    if(Auth::user()->hasRole('superadministrator')){
                        return redirect()->route('admin.home');
                    }

                    if(Auth::user()->hasRole('developer')){
                        return redirect()->route('admin.home');
                    }


                }else{
                    //Checks if there is role session set
                    if (Session::has('role')){
                        //If not found the register
                        $newUser = User::create([
                            'name'      => $user->name,
                            'email'     => $user->email,
                            'google_id' => $user->id,
                            'password'  => bcrypt('12345dummy')
                        ]);

                        //Updating user details
                        $newAccount =  User::where('google_id', $user->id)->first();
                        UserDetail::create([
                            'user_id' => $newAccount->id,
                            'firstname'     => 'Yet to be supplied',
                            'lastname'      => 'Yet to be supplied',
                            'date_of_birth' => 'Yet to be supplied',
                            'phone'         => 'Yet to be supplied',
                            'address'       => 'Yet to be supplied',
                            'city'          => 'Yet to be supplied',
                            'state'         => 'Yet to be supplied',
                            'zipcode'       => 'Yet to be supplied',
                            'country'       => 'Yet to be supplied',
                            'about'         => 'Yet to be supplied',
                        ]);

                        return redirect('/auth/google/user/'.$user->id.'/password');//redirect to change password page


                    }else{
                        //If session is not set
                        session()->flash('message', 'Account not found, Please create an Account!.');
                        return redirect()->route('user.account');
                    }

                }


            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }







    public function redirectMenteeToGoogle(){
        Session::put('role', 'mentee'); //sets account type
        return Socialite::driver('google')->redirect();
    }

    public function redirectMentorToGoogle(){
        Session::put('role', 'mentor'); //sets account type
        return Socialite::driver('google')->redirect();
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function selectGooglePassword($google_id){
        $data = [
            'title'         => 'Login | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha login,  mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'     => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/auth/select_password', ['google_id' => $google_id, 'setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }
}
