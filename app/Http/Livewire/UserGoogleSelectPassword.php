<?php

namespace App\Http\Livewire;

use App\Mail\MenteeCreateAccountEmail;
use App\Mail\MentorCreateAccountEmail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class UserGoogleSelectPassword extends Component
{
    public $role;
    public $password;
    public $password_confirmation;
    public $google_id;


    public function mount($google_id){
        $this->google_id = $google_id;

    }

    public function updated($field){
        $this->validateOnly($field, [
//            'role'                  => 'required',
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);
    }


    public function updatePassword(){
        $this->validate([
//            'role'                  => 'required',
            'password'              => 'required|min:6',
            'password_confirmation' => 'min:6|required_with:password|same:password',
        ]);

        $user = User::where('google_id', $this->google_id)->update([
            'password' => Hash::make($this->password),
        ]);
        $newAccount =  User::where('google_id', $this->google_id)->first();

        $newAccount->attachRole(Session::get('role'));

        try {
            if(Session::get('role') == 'mentor'){
                //Mails user concerning the registration
                $data = [
                    'email' => $newAccount->email,
                    'name'  => $newAccount->name,
                ];
                Mail::to($newAccount->email)->send(new MentorCreateAccountEmail($data));
            }

            if(Session::get('role') == 'mentee'){
                //Mails user concerning the registration
                $data = [
                    'email' => $newAccount->email,
                    'name'  => $newAccount->name,
                ];
                Mail::to($newAccount->email)->send(new MenteeCreateAccountEmail($data));
            }
            }catch (\Exception $e){

            }



        Session::forget('role'); //Unset role session

        session()->flash('message', 'Registration completed.');
//        $this->emit('alert', ['type' => 'success', 'message' => 'Registration successful, you can now login']);
        redirect()->route('user.login');
        //$this->discard();
    }

    public function discard(){
        $this->password              = '';
        $this->password_confirmation = '';
    }


    public function render()
    {
        return view('livewire.user-google-select-password');
    }
}
