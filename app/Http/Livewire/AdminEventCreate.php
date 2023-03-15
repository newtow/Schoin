<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
class AdminEventCreate extends Component
{
    public $nama_event,$lokasi,$deskripsi,$foto,$mulai,$selesai;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin-event-create');
    }
    public function storeevent(){

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
        $event=Event::create([
            'nama_event'=>$this->nama_event,
            'lokasi'=>$this->lokasi,
            'deskripsi'=>$this->deskripsi,
            'foto'=>$namafoto,
            'mulai'=>$this->mulai,
            'selesai'=>$this->selesai,
        ]);
        $this->resetinput();
        $this->emit('eventstored',$event);
     
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