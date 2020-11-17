<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Social;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    private $social;
    private $setting;




    /*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
|
| This controller handles authenticating users for the application and
| redirecting them to your home screen. The controller uses a trait
| to conveniently provide its functionality to your applications.
|
*/

    use AuthenticatesUsers;

//    /**
//     * Where to redirect users after login.
//     *
//     * @var string
//     */
//    protected $redirectTo = '/todo';
//
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */





    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->social = Social::latest()->first(); //fetches the last record
        $this->setting = Setting::latest()->first(); //fetches the last record

    }

    public function login(){
        $data = [
            'title'         => 'Login | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha login,  mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'     => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/auth/login' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function reset(){
        $data = [
            'title'         => 'Reset password | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha login,  mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'     => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/auth/reset' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function token(){
        $data = [
            'title'         => 'Reset token | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha login,  mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'     => 'Home | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/auth/token' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }



    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('homepage');
    }

}
