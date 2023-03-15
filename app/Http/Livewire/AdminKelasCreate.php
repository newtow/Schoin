<?php

namespace App\Http\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class AdminKelasCreate extends Component
{
    public $kelas,$jurusan,$angkatan,$tahun_ajaran,$walikelas,$letak;
    public function render()
    {
        return view('livewire.admin-kelas-create');
    }
    public function storekelas(){

        $this->validate([
            
            'kelas'=>'required',
            'jurusan'=>'required',
            'angkatan'=>'required',
            'tahun_ajaran'=>'required',
            'walikelas'=>'required',
            'letak'=>'required',
        ]); 
        $kelas=Kelas::create([
            'kelas'=>$this->kelas,
            'jurusan'=>$this->jurusan,
            'angkatan'=>$this->angkatan,
            'tahun_ajaran'=>$this->tahun_ajaran,
            'walikelas'=>$this->walikelas,
            'letak'=>$this->letak,
        ]);
        $this->resetinput();
        $this->emit('kelasstored',$kelas);
     
    }
    private function resetinput(){
        
            $this->kelas=null;
            $this->jurusan=null;
            $this->angkatan=null;
            $this->tahun_ajaran=null;
            $this->walikelas=null;
            $this->letak=null;
    }
}
