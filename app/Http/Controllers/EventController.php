<?php

namespace App\Http\Controllers;

use App\Http\Livewire\EventPatrons;
use App\Models\Event;
use App\Models\EventsPatron;
use App\Models\EventSubscription;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $social;
    private $setting;


    public function __construct()
    {
        $this->social = Social::latest()->first(); //fetches the last record
        $this->setting = Setting::latest()->first(); //fetches the last record
    }

    public function home()
    {
        $data = [
            'title'         => 'Events | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'The events platform dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Events | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/event/home' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }

    public function userPastEvents()
    {
        $data = [
            'title'         => 'Past Events on Mozisha | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'Past Events on Mozisha, The events platform dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => 'Past Events on Mozisha, mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Past Events on Mozisha | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/event/past_events' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data]);
    }


    public function addEvent()
    {
        return view('admin/new_event');
    }

    public function upcomingEvents()
    {
        return view('admin/upcoming_events');
    }

    public function pastEvents()
    {
        return view('admin/past_events');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin/edit_event', ['event' => $event]);
    }

    public function eventBookings($id)
    {
        $event = Event::find($id);
        return view('admin/event_subscribers', ['event' => $event]);
    }

    public function eventSubscriber($id)
    {
        $sub = EventSubscription::find($id);
        return view('admin/event_subscriber_info', ['sub' => $sub]);
    }

    public function eventPatron($id)
    {
        $sub = EventsPatron::find($id);
        return view('admin/event_patron_info', ['sub' => $sub]);
    }

    public function eventPatrons()
    {
        return view('admin/events_patrons');
    }

    public function mozishaSubscribers()
    {
        return view('admin/mozisha_subscribers');
    }

    public function viewEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $data = [
            'title'         => $event->theme.' | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => $event->theme.'| The events platform dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => $event->theme.', mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => $event->theme.' | Mozisha Events',
        ];
        return view('user/event/view_event' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data, 'event' => $event]);
    }

    public function subscribeEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $data = [
            'title'         => $event->theme.' | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => $event->theme.' | The events platform dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => $event->theme.',mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => $event->theme,
        ];
        return view('user/event/subscribe_event' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data, 'event' => $event]);
    }

    public function joinPatron()
    {

        $data = [
            'title'         => 'Become our patron  | Mozisha | The learning community dedicated to building responsible entrepreneurs|',
            'description'   => 'Become our patron |The events platform dedicated to building respectful and responsible entrepreneurs and empowering all learners and also get the support you need to achieve your professional goals with an Mozisha apprenticeship',
            'keywords'      => ' Become our patron ,mozisha.net, mozisha.com, mozisha, mozisha international, mozisha official website, about mozisha, services of mozisha international,
                               The learning community dedicated to building respectful and responsible entrepreneurs and empowering all learners, learning platform',
            'dc_title'      => 'Become our patron | Mozisha | The learning community dedicated to building respectful and responsible entrepreneurs',
        ];
        return view('user/event/event_patron' ,['setting' => $this->setting, 'social' => $this->social, 'data' => $data,]);
    }
}
