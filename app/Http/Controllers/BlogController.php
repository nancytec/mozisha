<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    private $social;
    private $setting;


    public function __construct()
    {
        // $this->middleware('auth');
        $this->social = Social::latest()->first(); //fetches the last record
        $this->setting = Setting::latest()->first(); //fetches the last record

    }


    public function newBlog(){
        return view('admin/new_blog');
    }

    public function blogs(){
        return view('admin/blog_list');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin/edit_blog', ['blog' => $blog]);
    }

    public function userView($slug){
        $blog = Blog::where('slug', $slug)->first();
        $data = [
            'title'         => $blog->title,
            'description'   =>  Str::limit($blog->content, $limit = 300, $end = '...'),
            'keywords'      => $blog->title . ', mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => $blog->title,

            //Social media metadatas
            'sm_title'       => $blog->title,
            'sm_description' => Str::limit($blog->content, $limit = 300, $end = '...'),
            'sm_image'       => $blog->ImagePath,
            'sm_url'         => 'https://mozisha.com/blog/'.$blog->slug,
        ];
        return view('user/user_blog_view' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data, 'blog' => $blog]);

    }
}
