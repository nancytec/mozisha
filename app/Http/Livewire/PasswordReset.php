<?php

namespace App\Http\Livewire;

use App\Mail\AccountUpdateEmail;
use App\Mail\PasswordTokenEmail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\PasswordReset as PassReset;

class PasswordReset extends Component
{
    public $showResetForm  = true;
    public $showTokenForm  = false;
    public $showChoosePass = false;

    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    public function showResetForm(){
        $this->showResetForm  = true;
        $this->showTokenForm  = false;
        $this->showChoosePass = false;
    }

    public function showTokenForm(){
        $this->showResetForm  = false;
        $this->showTokenForm  = true;
        $this->showChoosePass = false;
    }

    public function showChoosePass(){
        $this->showResetForm  = false;
        $this->showTokenForm  = false;
        $this->showChoosePass = true;
    }

    public function updated($field){
        $this->validateOnly($field,[
           'email' => 'required|email|max:255',
        ]);
    }

    public function getCode(){
        $this->validate([
            'email' => 'required|email|max:255',
        ]);

        //check if the user exist
        $user = User::where('email', $this->email)->first();
        //fetch user information
        $userData = User::where('email', $this->email)->first();
        if($user){
            //check for existing tokens
            $token = PassReset::where('email', $this->email)->first();
            if($token){
                $code = Str::random(10); //The reset token

                PassReset::where('email', $this->email)->update([
                    'token' => $code, //genertates random digit
                ]);
                $data = [
                    'email' => $this->email,
                    'token' => $code,
                    'name'  => $userData->name,
                ];
                Mail::to($this->email)->send(new PasswordTokenEmail($data));
                $this->showTokenForm(); //Display toke form
            }else{
                $code = Str::random(10); //The reset token
                PassReset::create([
                    'email' => $this->email,
                    'token' => $code, //generates random
                ]);
                $data = [
                    'email' => $this->email,
                    'token' => $code,
                    'name'  => $userData->name,
                ];
                Mail::to($this->email)->send(new PasswordTokenEmail($data));
                $this->showTokenForm(); //Display toke form
            }

            session()->flash('message', 'Reset token sent.');

        }else{
            session()->flash('error', 'User not found!');
            $this->emit('alert', ['type' => 'error', 'message' => 'User not found!']);
        }
    }

    public function verifyToken(){
        $this->validate([
           'token' => 'required|max:12',
        ]);
        //verify token along with email;
       $token =  PassReset::where(['token' => $this->token, 'email' => $this->email])->first();
       if ($token){
           //deletes the old token and display the change password form
           PassReset::where(['token' => $this->token, 'email' => $this->email])->delete();
           session()->flash('message', 'New password!.');
           $this->showChoosePass();
       }else{
           session()->flash('error', 'Invalid token, try again!.');
       }
    }

    public function updatePass(){
        $userData = User::where('email', $this->email)->first();
        $this->validate([
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);

        User::where('email', $this->email)->update([
            'password' => Hash::make($this->password),
        ]);

        //Mails user concerning the update
        $data = [
            'email' => $this->email,
            'name'  => $userData->name,
        ];
        Mail::to($this->email)->send(new AccountUpdateEmail($data));

        session()->flash('message', 'Password Updated!');
        redirect()->route('user.login');
    }





    public function render()
    {
        return view('livewire.password-reset');
    }
}
