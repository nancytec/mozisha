<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Homepage extends Component

{
    public $blogs;

    public function mount(){
        $this->blogs = Blog::Where('status', 'Active')->orderBy('created_at','desc')->take(3)->get();
    }

    public function render()
    {
        return view('livewire.guest.homepage');
    }
}
