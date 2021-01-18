<?php

namespace App\Http\Livewire;

use App\Models\Blog as Blogs;
use Livewire\Component;

class UserViewBlog extends Component
{
    public $blog;

    public function mount($blog){
        $this->blog = $blog;
        Blogs::where('id', $this->blog->id)->update([
            'view'  => $this->blog->view+1,
        ]);
    }

    public function render()
    {
        return view('livewire.guest.user-view-blog');
    }
}
