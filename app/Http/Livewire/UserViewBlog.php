<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserViewBlog extends Component
{
    public $blog;

    public function mount($blog){
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.user-view-blog');
    }
}
