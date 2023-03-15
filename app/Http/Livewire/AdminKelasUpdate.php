<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kelas;
class AdminKelasUpdate extends Component
{
    public $kelasid,$kelas,$jurusan,$angkatan,$tahun_ajaran,$walikelas,$letak;
    protected $listeners = [
        'getkelas'
    ];
    public function render()
    {
        return view('livewire.admin-kelas-update');
    }
    public function getkelas($kelas){
        $this->kelasid = $kelas['id'];
        $this->kelas = $kelas['kelas'];
        $this->jurusan = $kelas['jurusan'];
        $this->angkatan = $kelas['angkatan'];
        $this->tahun_ajaran = $kelas['tahun_ajaran'];
        $this->walikelas = $kelas['walikelas'];
        $this->letak = $kelas['letak'];
    }
    public function updatekelas(){

        $this->validate([
            
            'kelas'=>'required',
            'jurusan'=>'required',
            'angkatan'=>'required',
            'tahun_ajaran'=>'required',
            'walikelas'=>'required',
            'letak'=>'required',
        ]); 
        if($this->kelasid){
            $kelas = Kelas::find($this->kelasid);
        $kelas->update([
            'kelas'=>$this->kelas,
            'jurusan'=>$this->jurusan,
            'angkatan'=>$this->angkatan,
            'tahun_ajaran'=>$this->tahun_ajaran,
            'walikelas'=>$this->walikelas,
            'letak'=>$this->letak,
        ]);
        $this->resetinput();
        $this->emit('kelasupdated',$kelas);
     
        }
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
