<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasDetail extends Component
{
    public $post,$siswa;

    public function mount($slug){
        $this->post = Kelas::where('id', $slug)->first();
        $this->siswa = Siswa::Where('kelas' ,$this->post["kelas"] )->where('angkatan',$this->post["angkatan"])->get();
    }
    public function render()
    {
        return view('livewire.kelas-detail')->extends('layouts.app')
        ->section('content');
    }
    
}


