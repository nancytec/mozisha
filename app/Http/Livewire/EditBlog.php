<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBlog extends Component
{
    use WithFileUploads;

    public $blog;
    public $title;
    public $image;
    public $new_image;
    public $category;
    public $content_1;
    public $quote;
    public $reference;
    public $content_2;
    public $status;

    public function mount($blog){
        $this->blog = $blog;
        $this->refresh();
    }

    public function updated($field){
        $this->validateOnly($field,[
            'title'     => 'required|max:255',
            'image'     => 'nullable|image|max:3000',
            'category'  => 'required|max:255',
            'content_1' => 'required|max:6000',
            'quote'     => 'required|max:2000',
            'reference' => 'required|max:255',
            'content_2' => 'required|max:4000',
            'status'    => 'required|max:255',
        ]);
    }

    public function updateBlog(){
        $this->validate([
            'title'     => 'required|max:255',
            'image'     => 'nullable|image|max:3000',
            'category'  => 'required|max:255',
            'content_1' => 'required|max:6000',
            'quote'     => 'required|max:2000',
            'reference' => 'required|max:255',
            'content_2' => 'required|max:4000',
            'status'    => 'required|max:255',
        ]);
        //Delete old image before storing the image and get the parameters
        if($this->image){
            $this->deleteOldFile($this->blog->image);
            $image = $this->storeFile();
        }else{
            $image = [
              'name' => $this->blog->image,
            ];
        }

        Blog::where('id', $this->blog->id)->update([
            'title'     => $this->title,
            'image'     => $image['name'],
            'category'  => $this->category,
            'content_1' => $this->content_1,
            'quote'     => $this->quote,
            'reference' => $this->reference,
            'content_2' => $this->content_2,
            'status'    => $this->status,

        ]);

        $this->refresh(); // Updating user inputs area
        session()->flash('message', 'Post updated successfully!.'); //displays a flash message

    }
    public function refresh(){
        $blog = Blog::find($this->blog->id);
        $this->title      = $blog->title;
        $this->new_image  = $blog->image;
        $this->category   = $blog->category;
        $this->content_1  = $blog->content_1;
        $this->quote      = $blog->quote;
        $this->reference  = $blog->reference;
        $this->content_2  = $blog->content_2;
        $this->status     = $blog->status;
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

    protected function deleteOldFile($filename){
        Storage::delete('/public/'.$filename);
    }

    public function render()
    {
        return view('livewire.admin.edit-blog');
    }
}
