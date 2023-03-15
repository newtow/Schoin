<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;
class AdminSiswaCreate extends Component
{
    public $kelas,$jurusan,$angkatan,$absen,$tempat_lahir,$tanggal_lahir,$nama_siswa,$nisn,$nis,$kelamin;
    public function render()
    {
        return view('livewire.admin-siswa-create');
    }
    public function storesiswa(){

        $this->validate([
            
            'kelas'=>'required',
            'jurusan'=>'required',
            'angkatan'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'absen'=>'required',
            'tanggal_lahir'=>'required',
            'tempat_lahir'=>'required',
            'kelamin'=>'required',
            'nama_siswa'=>'required',
        ]); 
        $siswa=Siswa::create([
            'kelas'=>$this->kelas,
            'jurusan'=>$this->jurusan,
            'angkatan'=>$this->angkatan,
            'nis'=>$this->nis,
            'nisn'=>$this->nisn,
            'absen'=>$this->absen,
            'tanggal_lahir'=>$this->tanggal_lahir,
            'tempat_lahir'=>$this->tempat_lahir,
            'kelamin'=>$this->kelamin,
            'nama_siswa'=>$this->nama_siswa,
        ]);
        $this->resetinput();
        $this->emit('siswastored',$siswa);
     
    }
    private function resetinput(){
        
            $this->kelas=null;
            $this->jurusan=null;
            $this->angkatan=null;
            $this->nis=null;
           $this->nisn=null;
           $this->absen=null;
            $this->tanggal_lahir=null;
           $this->tempat_lahir=null;
            $this->kelamin=null;
        $this->nama_siswa=null;
           
    }
}
