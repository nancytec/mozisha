<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;

class UserPageController extends Controller
{

    private $social;
    private $setting;


    public function __construct()
    {
       // $this->middleware('auth');
        $this->social = Social::latest()->first(); //fetches the last record
        $this->setting = Setting::latest()->first(); //fetches the last record

    }

    public function home(){
        $data = [
            'title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];
        return view('user/home' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function about(){
        $data = [
            'title'            => 'About Mozisha | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'      => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'         => 'mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'         => 'About Mozisha | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'About Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('about'),

        ];
        return view('user/about' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }



    public function coursesMore(){
        $data = [
            'title'         => 'Courses | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                                The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Courses | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),

        ];
        return view('user/elearning_more' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function appMore(){
        $data = [
            'title'         => 'Apprenticeship platform | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'Apprenticeship platform, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                                The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Apprenticeship platform | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];
        return view('user/app_more' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }
    public function colMore(){
        $data = [
            'title'         => 'Collaboration platform | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'Collaboration platform, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                                The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Collaboration platform | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];
        return view('user/col_more' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function freeMore(){
        $data = [
            'title'         => 'Freelancing platform | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'Freelancing platform, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                                The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Freelancing platform | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',


            'sm_title'         => 'Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('homepage'),
        ];
        return view('user/freelance_more' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }



    public function blog(){
        $data = [
            'title'            => 'Mozisha Blogs | The learning community dedicated to building responsible entrepreneurs|',
            'description'      => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'         => 'mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'         => 'Mozisha Blogs',

            'sm_title'         => 'Mozisha Blogs | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('blog'),
        ];
        return view('user/blog' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function team(){
        $data = [
            'title'         => 'Mozisha Team ',
            'description'   => 'Team working at mozisha international',
            'keywords'      => 'Mozisha Team, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'        => 'Mozisha Team',

            'sm_title'         => 'Mozisha Team ',
            'sm_description'   => 'Team working at mozisha international',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('team'),
        ];
        return view('user/team' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }


    public function soon(){
        $data = [
            'title'         => 'Coming soon on Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Coming soon on Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'sm_description'   => 'This feature is coming soon on Mozisha ',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('coming_soon'),
        ];
        return view('user/coming_soon' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }



    public function accountType(){
        $data = [
            'title'         => 'Account type',
            'description'   => 'Select the type of account you wish to create on mozisha',
            'keywords'      => 'Account type on mozisha, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',

            'sm_title'         => 'Account type',
            'sm_description'   => 'Select the type of account you wish to create on mozisha',
            'sm_image'         => 'https://mozisha.com/user/img/moz.jpg',
            'sm_url'           => route('user.account'),
        ];
        return view('user/auth/account_type' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

}
