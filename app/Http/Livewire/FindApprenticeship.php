<?php

namespace App\Http\Livewire;

use App\Models\Apprenticeship;
use Livewire\Component;
use Livewire\WithPagination;

class FindApprenticeship extends Component
{
    use WithPagination;
    public $user;
//    public $apps;
    public $apps_no;

    public function mount($user){
        $this->user = $user;
        $this->fetchDefaultApp();
    }

    public function updated(){

    }

    public function fetchDefaultApp(){
        //Based on time uploaded
//       $this->apps =  Apprenticeship::orderBy('created_at', 'DESC')->get();
       $this->apps_no =  Apprenticeship::orderBy('created_at', 'ASC')->count();
    }

    public function render()
    {
        return view('livewire.mentee.find-apprenticeship', [
            'apps' => Apprenticeship::orderBy('created_at', 'DESC')->paginate(10),
        ]);
    }
}
