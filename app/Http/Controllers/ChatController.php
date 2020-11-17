<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
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
        $user = User::find(Auth::user()->id);
        $data = [
            'title'         => 'Mozisha Messenger | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
            'description'   => 'Mozisha, providing students with free, hands-on marketing experience to help businesses grow. Students - take courses online and gain practical experience with an apprenticeship. Businesses - search our talent pool and start saving time and money on your marketing efforts. Sign up today!',
            'keywords'      => 'mozisha.net, mozisha.com, Registration as a mentor, register as a mentor, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/chat/home', ['setting' => $this->setting, 'social' => $this->social, 'data' => $data, 'user' => $user]);
    }

    public function platform(){
        $user = User::find(Auth::user()->id);
        $data = [
            'title'         => 'Chatee Name | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
            'description'   => 'Mozisha, providing students with free, hands-on marketing experience to help businesses grow. Students - take courses online and gain practical experience with an apprenticeship. Businesses - search our talent pool and start saving time and money on your marketing efforts. Sign up today!',
            'keywords'      => 'mozisha.net, mozisha.com, Registration as a mentor, register as a mentor, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/chat/platform', ['setting' => $this->setting, 'social' => $this->social, 'data' => $data, 'user' => $user]);
    }
}

