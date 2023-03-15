<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jadwal;
class AdminJadwalCreate extends Component
{
    public $mapel,$kelas,$hari,$jampel,$mulai,$selesai,$codeguru,$tahun_ajaran,$walikelas,$letak;
    public function render()
    {
        return view('livewire.admin-jadwal-create');
    }
    public function storejadwal(){

        $this->validate([
            'mapel'=>'required',
            'kelas'=>'required',
            'hari'=>'required',
            'jampel'=>'required',
            'mulai'=>'required',
            'selesai'=>'required',
            'codeguru'=>'required',
            'tahun_ajaran'=>'required',
            
            
        ]); 
        $jadwal=Jadwal::create([
            'mapel'=>$this->mapel,
            'kelas'=>$this->kelas,
            'hari'=>$this->hari,
            'jampel'=>$this->jampel,
            'mulai'=>$this->mulai,
            'selesai'=>$this->selesai,
            'codeguru'=>$this->codeguru,
            'tahun_ajaran'=>$this->tahun_ajaran,
            'walikelas'=>$this->walikelas,
            'letak'=>$this->letak,
        ]);
        $this->resetinput();
        $this->emit('jadwalstored',$jadwal);
     
    }
    private function resetinput(){
        $this->mapel=null;
            $this->kelas=null;
            $this->hari=null;
            $this->jampel=null;
            $this->mulai=null;
            $this->selesai=null;
            $this->codeguru=null;
            $this->tahun_ajaran=null;
            $this->walikelas=null;
            $this->letak=null;
    }
}
