<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
class EventIndex extends Component
{
    public $eventid;
    public function render()
    {
        return view('livewire.event-index',[
            'event'=>Event::all(),
            'detil'=>Event::where('id', $this->eventid)->first()
        ]);
    }
    public function eventdetil($id){
       $this->eventid = $id ;
    }
}
