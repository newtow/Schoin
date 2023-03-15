<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Event;
class AdminEvent extends Component
{
    protected $listeners =[
        'eventstored',
        'eventupdated'

    ];
    public $updateMode=False;
    use WithPagination;
    public function render()
    {
        return view('livewire.admin-event',[
            'event'=>Event::latest()->paginate(6)
        ]);
    }
    public function getevent($id){
        $this->updateMode=true;
       $event = Event::find($id);
       $this->emit('getevent',$event);
       
    }
    public function destroy($id){
        if($id){
            $data = Event::find($id);
            $data->delete();
        }
        
    }
    public function eventstored(){

        

    }
    public function eventupdated(){

        $this->updateMode=false;

    }
}
