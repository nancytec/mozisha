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
    public $continue_1;
    public $continue_image_1;
    public $continue_2;
    public $continue_image_2;
    public $quote;
    public $quote_by;
    public $status;

    //Toggle properties
    public $continue_1_input;
    public $continue_1_image;
    public $continue_2_input;
    public $continue_2_image;
    public $quote_input;
    public $quote_by_input;

    public function showContinue_1(){$this->continue_1_input = true;}

    public function showContinueImage_1(){$this->continue_1_image = true;}

    public function showContinue_2(){$this->continue_2_input = true;}

    public function showContinueImage_2(){$this->continue_2_image = true;}

    public function showQuote(){$this->quote_input = true; $this->quote_by_input = true;}


    public function updated($field){
        $this->validateOnly($field,[
           'title'              => 'required|max:255|unique:blogs,title',
           'image'              => 'required|image|max:3000',
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

    public function newBlog(){
        $this->validate([
            'title'              => 'required|max:255|unique:blogs,title',
            'image'              => 'required|image|max:3000',
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

        //Store the image and get the parameters
        $image = $this->formatImage($this->image);

        //Store other image and get the parameters if supplied
        $continue_image_1 = $this->formatImage($this->continue_image_1);

        $continue_image_2 = $this->formatImage($this->continue_image_2);

        $post =  Blog::create([
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
            'user_id'           => Auth::user()->id,
        ]);

//        //Mail subscribers
//        $this->mailSubscribers($post);

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

    public function formatImage($image)
    {
        if ($image) {return $this->storeFile($image);}
        return  [
                'name'          => '',
                'original_name' => '',
            ];
    }

    public function storeFile($image)
    {

        $img = ImageManagerStatic::make($image)->encode('jpg');
        $original_filename = $this->image->getClientOriginalName();
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
                'original_name' => $original_filename,
            ];

    }

    public function discard(){
        $this->title                = '';
        $this->image                = '';
        $this->category             = '';
        $this->content              = '';
        $this->status               = '';
        $this->continue_1           = '';
        $this->continue_1_image     = '';
        $this->continue_2           = '';
        $this->continue_image_2     = '';
        $this->quote                = '';
        $this->quote_by             = '';
    }

    public function render()
    {
        return view('livewire.admin.new-blog');
    }
}
