<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kelas;
class KelasIndex extends Component
{
    public $selected ="2023-2024";
    public function render()
    {
        return view('livewire.kelas-index',[
            'kelas'=>kelas::where('tahun_ajaran','like','%'.$this->selected.'%')->get(),
            'tkj'=>kelas::where('tahun_ajaran','like','%'.$this->selected.'%')->where('jurusan','like',"%Teknik Komunikasi Jaringan%")->get(),
            'akl'=>kelas::where('tahun_ajaran','like','%'.$this->selected.'%')->where('jurusan','like',"%Akuntansi%")->get(),
            'bdp'=>kelas::where('tahun_ajaran','like','%'.$this->selected.'%')->where('jurusan','like',"%Pemasaran%")->get(),
            'thn'=>Kelas::all(),
           
        ]);
        
    }
 
}
