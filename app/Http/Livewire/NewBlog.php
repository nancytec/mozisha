<?php

namespace App\Http\Livewire;

use App\Mail\NewBlogPostMail;
use App\Models\MozishaSubscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    public $content;
    public $status;

    public function updated($field){
        $this->validateOnly($field,[
           'title'     => 'required|max:255|unique:blogs,title',
           'image'     => 'required|image|max:3000',
           'category'  => 'required|max:255',
           'content'   => 'required|max:6000',
           'status'    => 'required|max:255',
        ]);
    }

    public function newBlog(){
        $this->validate([
            'title'     => 'required|max:255|unique:blogs,title',
            'image'     => 'required|image|max:3000',
            'category'  => 'required|max:255',
            'content'   => 'required|max:6000',
            'status'    => 'required|max:255',
        ]);
        //Store the image and get the parameters
        $image = $this->storeFile();
       $post =  Blog::create([
            'title'     => $this->title,
            'slug'      => Str::slug($this->title),
            'image'     => $image['name'],
            'category'  => $this->category,
            'content'   => $this->content,
            'status'    => $this->status,
            'user_id'   => Auth::user()->id,

        ]);

        //Mail subscribers
        $this->mailSubscribers($post);

        $this->discard(); // Clearing user inputs area
        session()->flash('message', 'Post uploaded successfully!.'); //displays a flash message

    }

    public function mailSubscribers($post)
    {
        //Mail the user concerning the event as a reminder.
        $subs = MozishaSubscription::all();
        if ($subs){
            foreach ($subs as $sub){
                $data = [
                    'name' => $sub->name,
                    'id'   => $post->slug,
                    'title'  => $post->title,
                    'details' => Str::limit($post->content, 250, $end='...'),
                    'email' => $sub->email,
                    'date' => $post->created_at->format('d M Y').',' . $post->created_at->format('h:iA'),
                ];
                try {
                    Mail::to($sub->email)->send(new NewBlogPostMail($data));
                }catch (\Exception $e){
                    $this->emit('alert', ['type' => 'info', 'message' => 'Notification failed.']);
                }
            }


        }

    }

    public function discard(){
        $this->title      = '';
        $this->image      = '';
        $this->category   = '';
        $this->content    = '';
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
