<?php

namespace App\Http\Livewire;

use App\Mail\AccountUpdateEmail;
use App\Mail\MenteeCreateAccountEmail;
use App\Mail\MentorCreateAccountEmail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MentorRegister extends Component
{
    public $first_name;
    public $last_name;
    public $terms;
    public $email;
    public $password;
    public $password_confirmation;

    public function updated($field){
        $this->validateOnly($field, [
            'first_name'            => 'required|max:255',
            'last_name'             => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:users,email',
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);
    }

    public function messages()
    {
        return [
            'terms.required' => ' You have to agree to Apprenticeship Privacy Policy & Terms.',
        ];
    }

    public function addUser(){
        $this->validate([
            'first_name'            => 'required|max:255',
            'last_name'             => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:users,email',
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);



        $user = User::create([
            'name'     => $this->last_name . ' ' . $this->first_name,
            'email'    => $this->email,
            'password' => $this->password,
        ]);

        //Updating user details
        $newAccount =  User::where('email', $this->email)->first();
        UserDetail::create([
            'user_id'       => $newAccount->id,
            'firstname'     => $this->first_name,
            'lastname'      => $this->last_name,
            'age'           => '',
            'phone'         => '',
            'address'       => '',
            'city'          => '',
            'state'         => '',
            'zipcode'       => '',
            'country'       => '',
            'about'         => '',
        ]);
        //Sets the user role
        $newAccount->attachRole('mentor');

        try {
            //Mails user concerning the registration
            $data = [
                'email' => $this->email,
                'name'  => $this->last_name. ' '.$this->first_name,
            ];
            Mail::to($this->email)->send(new MentorCreateAccountEmail($data));
        }catch (\Exception $e){
            $this->emit('alert', ['type' => 'info', 'message' => 'Welcome mail failed.']);
        }


        session()->flash('message', 'Registration successful.');
        $this->emit('alert', ['type' => 'success', 'message' => 'Registration successful.']);
        return redirect()->route('user.login');
    }

    public function discard(){
        $this->first_name            = '';
        $this->last_name             = '';
        $this->email                 = '';
        $this->password              = '';
        $this->password_confirmation = '';
    }

    public function render()
    {
        return view('livewire.mentor.mentor-register');
    }
}
