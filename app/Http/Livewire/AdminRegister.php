<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserDetail;
use Livewire\Component;

class AdminRegister extends Component
{
    public $last_name;
    public $first_name;
    public $email;
    public $role;
    public $password;
    public $password_confirmation;

    public function updated($field){
        $this->validateOnly($field, [
           'last_name'             => 'required|max:255',
           'first_name'            => 'required|max:255',
           'email'                 => 'required|email|max:255|unique:users,email',
           'role'                  => 'required',
           'password'              => 'required|min:6',
           'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);
    }

    public function addUser(){
        $this->validate([
            'last_name'             => 'required|max:255',
            'first_name'            => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:users,email',
            'role'                  => 'required',
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);

        $user = User::create([
            'name'     => $this->last_name. ' '. $this->first_name,
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
        $user->attachRole($this->role);
        session()->flash('message', 'Registration successful!'); //displays a flash message
        $this->emit('alert', ['type' => 'success', 'message' => 'Registration successful.']);
        return redirect()->route('admin.home');
    }

    public function discard(){
        $this->name                  = '';
        $this->email                 = '';
        $this->password              = '';
        $this->password_confirmation = '';
    }


    public function render()
    {
        return view('livewire.admin.admin-register');
    }
}
