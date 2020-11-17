<?php

namespace App\Http\Livewire;

use App\Mail\MenteeCreateAccountEmail;
use App\Mail\MentorCreateAccountEmail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MenteeRegister extends Component
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
            'terms'                 => 'required',
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
            'terms'                 => 'required',
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
            'date_of_birth' => 'Yet to be supplied',
            'phone'         => 'Yet to be supplied',
            'address'       => 'Yet to be supplied',
            'city'          => 'Yet to be supplied',
            'state'         => 'Yet to be supplied',
            'zipcode'       => 'Yet to be supplied',
            'country'       => 'Yet to be supplied',
            'about'         => 'Yet to be supplied',
        ]);
        //Sets the user role
        $newAccount->attachRole('mentee');

        try {
            //Mails user concerning the registration
            $data = [
                'email' => $this->email,
                'name'  => $this->last_name. ' '.$this->first_name,
            ];
            Mail::to($this->email)->send(new MenteeCreateAccountEmail($data));
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
        $this->terms                 = '';
        $this->email                 = '';
        $this->password              = '';
        $this->password_confirmation = '';
    }

    public function render()
    {
        return view('livewire.mentee.mentee-register');
    }
}
