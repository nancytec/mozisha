<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;

class NewBlog extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $category;
    public $content_1;
    public $quote;
    public $reference;
    public $content_2;
    public $status;

    public function updated($field){
        $this->validateOnly($field,[
           'title'     => 'required|max:255',
           'image'     => 'required|image|max:3000',
           'category'  => 'required|max:255',
           'content_1' => 'required|max:6000',
           'quote'     => 'required|max:2000',
           'reference' => 'required|max:255',
           'content_2' => 'required|max:4000',
           'status'    => 'required|max:255',
        ]);
    }

    public function newBlog(){
        $this->validate([
            'title'     => 'required|max:255',
            'image'     => 'required|image|max:3000',
            'category'  => 'required|max:255',
            'content_1' => 'required|max:6000',
            'quote'     => 'required|max:2000',
            'reference' => 'required|max:255',
            'content_2' => 'required|max:4000',
            'status'    => 'required|max:255',
        ]);
        //Store the image and get the parameters
        $image = $this->storeFile();
        Blog::create([
            'title'     => $this->title,
            'image'     => $image['name'],
            'category'  => $this->category,
            'content_1' => $this->content_1,
            'quote'     => $this->quote,
            'reference' => $this->reference,
            'content_2' => $this->content_2,
            'status'    => $this->status,
            'user_id'   => Auth::user()->id,

        ]);

        $this->discard(); // Clearing user inputs area
        session()->flash('message', 'Post uploaded successfully!.'); //displays a flash message

    }
    public function discard(){
        $this->title      = '';
        $this->image      = '';
        $this->category   = '';
        $this->content_1  = '';
        $this->quote      = '';
        $this->reference  = '';
        $this->content_2  = '';
        $this->status     = '';
    }


    public function storeFile()
    {

        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $original_filename = $this->image->getClientOriginalName();
        $name = time() .Str::random(50).'_'.$original_filename;
        Storage::disk('public')->put($name, $img);

//
//        $file =  $this->image;
//        $original_filename = $file->getClientOriginalName();
//        $filename = time() .Str::random(50).'_'.$original_filename;
//
//        $file->storeAs('public', $filename); //stores the file in the public directory

        $fileData =
            [
                'name'          => $name,
                'original_name' => $original_filename,
            ];

        return $fileData;
    }

    public function render()
    {
        return view('livewire.admin.new-blog');
    }
}
