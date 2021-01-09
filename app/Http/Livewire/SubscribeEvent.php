<?php

namespace App\Http\Livewire;

use App\Mail\AdminEventSubscriptionMail;
use App\Mail\EventSubscriptionMail;
use App\Models\EventSubscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SubscribeEvent extends Component
{
    public $event;
    public $name;
    public $email;
    public $phone;
    public $details;

    public function mount($event)
    {
        $this->event = $event;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'details' => 'required|max:4000',
        ]);
    }

    public function submitRequest()
    {
        $this->validate([
            'name'  => 'required|max:255',
            'email'    => 'required|email|max:255',
            'phone'   => 'required|max:255',
            'details' => 'required|max:4000',
        ]);
        //check if exists
        if(EventSubscription::where(['email' => $this->email, 'event_id' => $this->event->id])->first()){
            $this->emit('alert', ['type' => 'error', 'message' => 'Email already exist in our list']);
            session()->flash('error', 'Email already exist in our list!.'); //displays a flash message
            return;
        }

        EventSubscription::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'phone'    => $this->phone,
            'event_id' => $this->event->id,
            'details'  => $this->details,
        ]);

        //Mails user concerning the subscription
        $data = [
            'name' => $this->name,
            'title'  => $this->event->theme,
            'email' => $this->email,
        ];
        try {
            Mail::to($this->email)->send(new EventSubscriptionMail($data));
         }catch (\Exception $e){
            $this->emit('alert', ['type' => 'info', 'message' => 'Notification failed.']);
        }

        try {
            Mail::to(['kene@mozisha.com', 'support@mozisha.com', 'info@mozisha.com', 'hello@mozisha.com'])->send(new AdminEventSubscriptionMail($data));
        }catch (\Exception $e){
            $this->emit('alert', ['type' => 'info', 'message' => 'Notification failed.']);
        }

        $this->discard();//Clear user inputs
        $this->emit('alert', ['type' => 'success', 'message' => 'Subscription successful, we\'ll notify you shortly']);
        session()->flash('success', 'Subscription successful, we\'ll notify you shortly.'); //displays a flash message
    }

    public function discard()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->details = '';
    }

    public function render()
    {
        return view('livewire.event.subscribe-event');
    }
}
