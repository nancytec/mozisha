<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\CompanyInfo as Details;
class CompanyInfo extends Component
{

    public $user;
    public $name;
    public $website;
    public $industry;
    public $position;
    public $description;


    public function updated($field){
        $this->validateOnly($field, [
            'name'          => 'required|max:255',
            'website'       => 'required|max:255',
            'industry'      => 'required|max:255',
            'position'      => 'required|max:255',
            'description'   => 'required|max:2000',
        ]);
    }

    public function updateProfile(){
        $this->validate([
            'name'          => 'required|max:255',
            'website'       => 'required|max:255',
            'industry'      => 'required|max:255',
            'position'      => 'required|max:255',
            'description'   => 'required|max:2000',
        ]);

        $info = Details::where('user_id', $this->user->id)->get();
        if($info->count() > 0){
            Details::where('user_id', $this->user->id)->first()->update([
                'name'         => $this->name,
                'website'      => $this->website,
                'industry'     => $this->industry,
                'position'     => $this->position,
                'description'  => $this->description,
            ]);
        }else{
            Details::create([
                'user_id'      => $this->user->id,
                'name'         => $this->name,
                'website'      => $this->website,
                'industry'     => $this->industry,
                'position'     => $this->position,
                'description'  => $this->description,
            ]);

        }

        $this->refresh();
        $this->emit('alert', ['type' => 'success', 'message' => 'Profile updated successfully.']);

    }

    public function mount($user){
        $this->user = $user;
        $this->refresh();
    }

    public function refresh(){
        $info = Details::where('user_id', $this->user->id)->count();
        if($info > 0){
            $info = Details::where('user_id', $this->user->id)->first();
            $this->name          = $info->name;
            $this->website       = $info->website;
            $this->industry      = $info->industry;
            $this->position       = $info->position;
            $this->description   = $info->description;
        }else{
            $this->name          = '';
            $this->website       = '';
            $this->industry      = '';
            $this->postion       = '';
            $this->description   = '';
        }

    }



    public function render()
    {
        return view('livewire.mentor.company-info');
    }
}
