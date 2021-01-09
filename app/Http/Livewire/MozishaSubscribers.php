<?php

namespace App\Http\Livewire;

use App\Models\MozishaSubscription;
use Livewire\Component;

class MozishaSubscribers extends Component
{
    public $count;

    public function mount()
    {
        $this->fetchCount();
    }

    public function fetchCount()
    {
        $this->count = MozishaSubscription::count();
    }

    public function render()
    {
        return view('livewire.admin.mozisha-subscribers', [
            'subs' => MozishaSubscription::paginate(15),
        ]);
    }
}
