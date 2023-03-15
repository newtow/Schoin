<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jadwal;
class AdminJadwalUpdate extends Component
{
    public $jadwalid,$mapel,$kelas,$hari,$jampel,$mulai,$selesai,$codeguru,$tahun_ajaran,$walikelas,$letak;
    protected $listeners = [
        'getjadwal'
    ];
    public function render()
    {
        return view('livewire.admin-jadwal-update');
    }
    public function getjadwal($jadwal){
        $this->jadwalid = $jadwal['id'];
        $this->mapel = $jadwal['mapel'];
        $this->kelas = $jadwal['kelas'];
        $this->hari = $jadwal['hari'];
        $this->jampel = $jadwal['jampel'];
        $this->mulai = $jadwal['mulai'];
        $this->selesai = $jadwal['selesai'];
        $this->codeguru = $jadwal['codeguru'];
        $this->tahun_ajaran = $jadwal['tahun_ajaran'];
        
    }
    public function updatejadwal(){

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
        if($this->jadwalid){
            $jadwal = Jadwal::find($this->jadwalid);
        $jadwal->update([
            'mapel'=>$this->mapel,
            'kelas'=>$this->kelas,
            'hari'=>$this->hari,
            'jampel'=>$this->jampel,
            'mulai'=>$this->mulai,
            'selesai'=>$this->selesai,
            'codeguru'=>$this->codeguru,
            'tahun_ajaran'=>$this->tahun_ajaran,
           
        ]);
        $this->resetinput();
        $this->emit('jadwalupdated',$jadwal);
    }
    }
    private function resetinput(){
        $this->mapel=null;
            $this->kelas=null;
            $this->hari=null;
            $this->jampel=null;
            $this->mulai=null;
            $this->selesai=null;
            

    }
}