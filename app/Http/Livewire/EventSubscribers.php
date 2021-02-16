<?php

namespace App\Http\Livewire;

use App\Mail\EventReminderMail;
use App\Models\EventSubscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class EventSubscribers extends Component
{
    use WithPagination;
    public $event;
    public $count;


    public function mount($event)
    {
        $this->event = $event;
        $this->countSubs();
    }

    public function countSubs()
    {
       $this->count =  EventSubscription::where('event_id', $this->event->id)->count();
    }

    public function remind()
    {
        //Mail the user concerning the event as a reminder.
        $subs = EventSubscription::where('event_id', $this->event->id)->get();
        if ($subs){
            foreach ($subs as $sub){
                $data = [
                    'name'      => $sub->name,
                    'title'     => $this->event->theme,
                    'email'     => $sub->email,
                    'platform'  => $this->event->platform,
                    'link'      => $this->event->link,
                    'date'      => $this->event->start_date,
                    'time'      => $this->event->start_hour.":".$this->event->start_minute.$this->event->start_meridian." - " . $this->event->start_time_zone
                ];

                try {
                    Mail::to($sub->email)->send(new EventReminderMail($data));
                    session()->flash('message', 'Notification sent successfully!.'); //displays a flash message
                }catch (\Exception $e){
                    $this->emit('alert', ['type' => 'info', 'message' => 'Notification failed.']);
                    session()->flash('error', 'Notification failed.'); //displays a flash message
                }
            }


        }

//        $this->emit('alert', ['type' => 'success', 'message' => 'Notification sent successfully.']);


    }

    public function render()
    {
        return view('livewire.admin.event-subscribers', [
            'subs' => EventSubscription::where('event_id', $this->event->id)->paginate(15)
        ]);
    }
}
