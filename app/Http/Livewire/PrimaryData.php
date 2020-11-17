<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;

class PrimaryData extends Component
{

    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $date_of_birth;
    public $phone;
    public $address;
    public $address_2;
    public $city;
    public $state;
    public $zipcode;
    public $country;
    public $gender;
    public $image;
    public $user;

    public function updated($field){
        $this->validateOnly($field, [
            'firstname'         => 'required|max:255',
            'lastname'          => 'required|max:255',
            'date_of_birth'     => 'required|max:255',
            'phone'             => 'required|max:255',
            'address'           => 'required|max:255',
            'address_2'         => 'nullable|max:255',
            'city'              => 'required|max:255',
            'state'             => 'required|max:255',
            'zipcode'           => 'required|max:255',
            'country'           => 'required|max:255',
            'gender'            => 'required',
        ]);
    }

    public function updateProfile(){
        $this->validate([
            'firstname'         => 'required|max:255',
            'lastname'          => 'required|max:255',
            'date_of_birth'     => 'required|max:255',
            'phone'             => 'required|max:255',
            'address'           => 'required|max:255',
            'address_2'         => 'nullable|max:255',
            'city'              => 'required|max:255',
            'state'             => 'required|max:255',
            'zipcode'           => 'nullable|max:255',
            'country'           => 'required|max:255',
            'gender'            => 'required',

        ]);
        if(!empty($this->image)){
            if ($this->updateImage()==false){
                $this->emit('alert', ['type' => 'error', 'message' => 'Image upload failed.']);
                return false;
            }else{
                //Remove old file
                //Check for existing user

                    //Check for old file an remove
                    $data = User::find(Auth::user()->id);;
                    if ($data->profile_photo_path){
                        $this->deleteOldFile($data->profile_photo_path);
                    }

                $image = $this->storeImage($this->image);
                User::where('id', Auth::user()->id)->update([
                    'profile_photo_path' => $image,
                ]);
                $this->image = '';
            }
        }
        //Update the existing one
        UserDetail::where('user_id', Auth::user()->id)->update([
            'firstname'     => $this->firstname,
            'lastname'      => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'phone'         => $this->phone,
            'address'       => $this->address,
            'address_2'     => $this->address_2,
            'city'          => $this->city,
            'state'         => $this->state,
            'zipcode'       => $this->zipcode,
            'gender'        => $this->gender,
            'country'       => $this->country,
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => $this->lastname . ' ' . $this->firstname,
        ]);

        $this->refresh();

        $this->emit('alert', ['type' => 'success', 'message' => 'Profile updated successfully.']);

    }

    public function storeImage($imageFile)
    {
        $img = ImageManagerStatic::make($imageFile)->encode('jpg');
        $name = Str::random(50). '.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;
    }

    protected function deleteOldFile($filename){
        Storage::delete('/public/'.$filename);
    }


    public function updateImage(){
       $validator =  $this->validate([
            'image'  => 'required|image|max:250'
        ]);
       return $validator;
    }

    public function mount($user){
        $this->user = $user;
        $this->refresh();
    }


    public function refresh(){
        $user = UserDetail::where('user_id', Auth::user()->id)->count();
        $userAccount = User::find(Auth::user()->id);
        if($user != 0){
            $user = UserDetail::where('user_id', Auth::user()->id)->first();
            $this->firstname    = $user->firstname;
            $this->lastname     = $user->lastname;
            $this->date_of_birth= $user->date_of_birth;
            $this->gender       = $user->gender;
            $this->phone        = $user->phone;
            $this->address      = $user->address;
            $this->address_2    = $user->address_2;
            $this->city         = $user->city;
            $this->state        = $user->state;
            $this->zipcode      = $user->zipcode;
            $this->country      = $user->country;
            $this->user         = $userAccount;
        }

    }



    public function render()
    {
        return view('livewire.mentee.primary-data');
    }
}
