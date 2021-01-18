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
    public $content;
    public $continue_1;
    public $continue_image_1;
    public $new_continue_image_1;
    public $continue_2;
    public $continue_image_2;
    public $new_continue_image_2;
    public $quote;
    public $quote_by;
    public $status;

    public function mount($blog){
        $this->blog = $blog;
        $this->refresh();
    }

    public function updated($field){
        $this->validateOnly($field,[
            'title'              => 'required|max:255',
            'image'              => 'nullable|image|max:3000',
            'category'           => 'required|max:255',
            'content'            => 'required|max:6000',
            'continue_1'         => 'nullable|max:4000',
            'continue_image_1'   => 'nullable|image|max:3000',
            'continue_2'         => 'nullable|max:4000',
            'continue_image_2'   => 'nullable|image|max:3000',
            'quote'              => 'nullable|max:1000',
            'quote_by'           => 'nullable|max:255',
            'status'             => 'required|max:255',
        ]);
    }

    public function updateBlog(){
        $this->validate([
            'title'              => 'required|max:255',
            'image'              => 'nullable|image|max:3000',
            'category'           => 'required|max:255',
            'content'            => 'required|max:6000',
            'continue_1'         => 'nullable|max:4000',
            'continue_image_1'   => 'nullable|image|max:3000',
            'continue_2'         => 'nullable|max:4000',
            'continue_image_2'   => 'nullable|image|max:3000',
            'quote'              => 'nullable|max:1000',
            'quote_by'           => 'nullable|max:255',
            'status'             => 'required|max:255',
        ]);

        //Check if the title exists apart from this
        if(!$this->checkForExistingBlog())
        {
            session()->flash('error', 'The title exists, please modify it!.'); //displays a flash message
            return;
        }

        //Delete old image before storing the image and get the parameters
//        if ($this->image){
//            $image = $this->storeFile();
//            $image = $image['name'];
//        }else{
//            //else use d old one
//            $image = $this->old_image_name;
//        }


       $image = $this->formatImage($this->image, $this->blog->image);

       $continue_image_1 = $this->formatImage($this->continue_image_1, $this->blog->continue_image_1);

       $continue_image_2 = $this->formatImage($this->continue_image_2, $this->blog->continue_image_2);

        Blog::where('id', $this->blog->id)->update([
            'title'             => $this->title,
            'slug'              => Str::slug($this->title),
            'image'             => $image['name'],
            'category'          => $this->category,
            'content'           => $this->content,
            'continue_1'        => $this->continue_1,
            'continue_image_1'  => $continue_image_1['name'],
            'continue_2'        => $this->continue_2,
            'continue_image_2'  => $continue_image_2['name'],
            'quote'             => $this->quote,
            'quote_by'          => $this->quote_by,
            'status'            => $this->status,

        ]);

        $this->refresh(); // Updating user inputs area
        session()->flash('message', 'Post updated successfully!.'); //displays a flash message

    }

    public function removeContinue1Image()
    {
        $this->deleteOldFile($this->blog->continue_image_1);
        Blog::where('id', $this->blog->id)->update([
           'continue_image_1' => '',
        ]);
        $this->refresh();
    }

    public function removeContinue2Image()
    {
        $this->deleteOldFile($this->blog->continue_image_2);
        Blog::where('id', $this->blog->id)->update([
            'continue_image_2' => '',
        ]);
        $this->refresh();
    }

    public function checkForExistingBlog()
    {
        $checkBlog = Blog::where([
            ['id', '!=', $this->blog->id],
            ['title', '=', $this->title]
        ])->first();

        if ($checkBlog){
            return false;
        }
        return true;
    }

    public function refresh(){
        $blog = Blog::find($this->blog->id);
        $this->title            = $blog->title;
        $this->new_image        = $blog->image;
        $this->category         = $blog->category;
        $this->content          = $blog->content;
        $this->status           = $blog->status;
        $this->continue_1       = $blog->continue_1;
        $this->new_continue_image_1 = $blog->continue_image_1;
        $this->continue_2       = $blog->continue_2;
        $this->new_continue_image_2 = $blog->continue_image_2;
        $this->quote            = $blog->quote;
        $this->quote_by         = $blog->quote_by;
        $this->blog = $blog;
    }

    public function formatImage($new_image, $old_image)
    {

        //Save the new file
        if ($new_image) {

            //Deletes old image first
            if(!empty($old_image)){$this->deleteOldFile($old_image);}

            return $this->storeFile($new_image);
        }
        return  [
            'name'          => $old_image,
        ];
    }

    public function storeFile($image)
    {

        $img = ImageManagerStatic::make($image)->encode('jpg');
        $original_filename = $image->getClientOriginalName();
        $name = time() .Str::random(50).'_'.$original_filename;
        Storage::disk('public')->put($name, $img);

//
//        $file =  $this->image;
//        $original_filename = $file->getClientOriginalName();
//        $filename = time() .Str::random(50).'_'.$original_filename;
//
//        $file->storeAs('public', $filename); //stores the file in the public directory

        return
            [
                'name'          => $name,
            ];

    }

    protected function deleteOldFile($filename){
        Storage::delete('/public/'.$filename);
    }

    public function render()
    {
        return view('livewire.admin.edit-blog');
    }
}
