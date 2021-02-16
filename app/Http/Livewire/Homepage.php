<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use App\Models\Blog;

class Homepage extends Component

{
    public $blogs;
    public $events;

    public function mount(){
        $this->blogs = Blog::Where('status', 'Active')->orderBy('created_at','desc')->take(3)->get();
        $this->fetchUpcoming();
    }

    public function fetchUpcoming()
    {
       $this->events =  Event::where([
            ['status', '=', 'Active'],
//            ['start_time_stamp', '>', time()]
        ])->limit(3)->get();
    }

    public function render()
    {
        return view('livewire.guest.homepage');
    }
}
