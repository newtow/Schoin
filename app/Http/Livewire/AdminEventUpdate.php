<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;
class AdminEventUpdate extends Component
{
    use WithFileUploads;
    public $eventid,$nama_event,$lokasi,$deskripsi,$foto,$mulai,$selesai;
    protected $listeners = [
        'getevent'
    ];
    public function render()
    {
        return view('livewire.admin-event-update');
    }
    public function getevent($event){
        $this->eventid = $event['id'];
        $this->nama_event = $event['nama_event'];
        $this->lokasi = $event['lokasi'];
        $this->deskripsi = $event['deskripsi'];
        $this->mulai = $event['mulai'];
        $this->selesai = $event['selesai'];
        
    }
    public function updateevent(){

        $this->validate([
            
            'nama_event'=>'required',
            'lokasi'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required|image|mimes:jpg,jpeg,png,svg',
            'mulai'=>'required',
            'selesai'=>'required',
        ]); 
        $namafoto = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $this->foto->storeAs('photos', $namafoto);
        
        if($this->eventid){
            $event = event::find($this->eventid);
        $event->update([
            'nama_event'=>$this->nama_event,
            'lokasi'=>$this->lokasi,
            'deskripsi'=>$this->deskripsi,
            'foto'=>$namafoto,
            'mulai'=>$this->mulai,
            'selesai'=>$this->selesai,
        ]);
        $this->resetinput();
        $this->emit('eventupdated',$event);
    }
    }
    private function resetinput(){
        
        $this->nama_event=null;
        $this->lokasi=null;
        $this->deskripsi=null;
        $this->foto=null;
        $this->mulai=null;
        $this->selesai=null;
}
}
