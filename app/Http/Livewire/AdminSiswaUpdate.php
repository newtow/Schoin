<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;
class AdminSiswaUpdate extends Component
{
    public $siswaid,$kelas,$jurusan,$angkatan,$absen,$tempat_lahir,$tanggal_lahir,$nama_siswa,$nisn,$nis,$kelamin;
    protected $listeners = [
        'getsiswa'
    ];
    public function render()
    {
        return view('livewire.admin-siswa-update');
    }
    public function getsiswa($siswa){
        $this->siswaid=$siswa['id'];
        $this->kelas=$siswa['kelas'];
            $this->jurusan=$siswa['jurusan'];
            $this->angkatan=$siswa['angkatan'];
            $this->nis=$siswa['nis'];
           $this->nisn=$siswa['nisn'];
           $this->absen=$siswa['absen'];
            $this->tanggal_lahir=$siswa['tanggal_lahir'];
           $this->tempat_lahir=$siswa['tempat_lahir'];
            $this->kelamin=$siswa['kelamin'];
        $this->nama_siswa=$siswa['nama_siswa'];
    }
    public function updatesiswa(){

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
        
    
        if($this->siswaid){
        $siswa = Siswa::find($this->siswaid);
     
        $siswa->update([
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
        $this->emit('siswaupdated',$siswa);}
     
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
