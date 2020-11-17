<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminFacebookSelectPassword extends Component
{

    public $password;
    public $password_confirmation;
    public $facebook_id;

    public function mount($facebook_id){
        $this->facebook_id = $facebook_id;
    }

    public function updated($field){
        $this->validateOnly($field, [
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);
    }


    public function updatePassword(){
        $this->validate([
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);

        User::where('google_id', $this->facebook_id)->update([
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Registration successful.');
        $this->emit('alert', ['type' => 'success', 'message' => 'Registration successful.']);
        return redirect()->route('admin.register');
        //$this->discard();
    }

    public function discard(){
        $this->password              = '';
        $this->password_confirmation = '';
    }


    public function render()
    {
        return view('livewire.admin.admin-facebook-select-password');
    }
}
