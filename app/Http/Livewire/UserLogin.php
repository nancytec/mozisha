<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserLogin extends Component
{

    public $email;
    public $password;
    public $remember;

    use AuthenticatesUsers;

    public function updated($field){
        $this->validateOnly($field, [
            'email'    => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
    }


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    protected function authenticated($user){

        if ($user->hasRole('mentor')){
            //Redirects to the Mentors portal
            redirect()->intended('mentor/dashboard');
        }

        if($user->hasRole('mentee')){
            //Redirects to the mentees/Apprentice portal
            redirect()->intended('mentee/dashboard');
        }

        if($user->hasRole('administrator')){
            //Redirects to the Admin portal
            redirect()->intended('/executive');
        }

        if($user->hasRole('superadministrator')){
            //Redirects to the Admin portal
            redirect()->intended('/executive');
        }

        if($user->hasRole('developer')){
            //Redirects to the Admin portal
            redirect()->intended('/executive');
        }
        //For other users(to be developed later...)
    }


    public function login(){
        $this->validate([
            'email'    => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'status' => 'Active'], $this->remember)) {
            // Authentication passed...
            $user = User::where('email', $this->email)->first();
            $this->authenticated($user); //Redirects to the appropriate routes
        }else{
            $this->emit('alert', ['type' => 'error', 'message' => 'Invalid login credentials.']);
        }

    }


    public function render()
    {
        return view('livewire.user-login');
    }
}
