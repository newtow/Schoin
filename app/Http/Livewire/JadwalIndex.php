<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kelas;
use App\Models\Jadwal;
class JadwalIndex extends Component
{
    public $selected ="2023-2024",$search,$selectkls="12 TKJ3";
    
    protected $queryString = ['search','selected','selectkls'];
    public function render()
    {
        
        return view('livewire.jadwal-index',[
            'kelas'=>kelas::where('kelas','like','%'.$this->search.'%')->where('tahun_ajaran','like','%'.$this->selected.'%')->get(),
            'thn'=>Kelas::all(),
            'jadwal'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('tahun_ajaran','like','%'.$this->selected.'%')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_1'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',1)->where('hari','senin')->get(),
            'pel2_1'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',1)->where('hari','selasa')->get(),
            'pel3_1'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',1)->where('hari','rabu')->get(),
            'pel4_1'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',1)->where('hari','kamis')->get(),
            'pel5_1'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',1)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_2'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',2)->where('hari','senin')->get(),
            'pel2_2'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',2)->where('hari','selasa')->get(),
            'pel3_2'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',2)->where('hari','rabu')->get(),
            'pel4_2'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',2)->where('hari','kamis')->get(),
            'pel5_2'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',2)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_3'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',3)->where('hari','senin')->get(),
            'pel2_3'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',3)->where('hari','selasa')->get(),
            'pel3_3'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',3)->where('hari','rabu')->get(),
            'pel4_3'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',3)->where('hari','kamis')->get(),
            'pel5_3'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',3)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_4'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',4)->where('hari','senin')->get(),
            'pel2_4'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',4)->where('hari','selasa')->get(),
            'pel3_4'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',4)->where('hari','rabu')->get(),
            'pel4_4'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',4)->where('hari','kamis')->get(),
            'pel5_4'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',4)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_5'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',5)->where('hari','senin')->get(),
            'pel2_5'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',5)->where('hari','selasa')->get(),
            'pel3_5'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',5)->where('hari','rabu')->get(),
            'pel4_5'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',5)->where('hari','kamis')->get(),
            'pel5_5'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',5)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_6'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',6)->where('hari','senin')->get(),
            'pel2_6'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',6)->where('hari','selasa')->get(),
            'pel3_6'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',6)->where('hari','rabu')->get(),
            'pel4_6'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',6)->where('hari','kamis')->get(),
            'pel5_6'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',6)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_7'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',7)->where('hari','senin')->get(),
            'pel2_7'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',7)->where('hari','selasa')->get(),
            'pel3_7'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',7)->where('hari','rabu')->get(),
            'pel4_7'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',7)->where('hari','kamis')->get(),
            'pel5_7'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',7)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_8'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',8)->where('hari','senin')->get(),
            'pel2_8'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',8)->where('hari','selasa')->get(),
            'pel3_8'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',8)->where('hari','rabu')->get(),
            'pel4_8'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',8)->where('hari','kamis')->get(),
            'pel5_8'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',8)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
            'pel1_9'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',9)->where('hari','senin')->get(),
            'pel2_9'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',9)->where('hari','selasa')->get(),
            'pel3_9'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',9)->where('hari','rabu')->get(),
            'pel4_9'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',9)->where('hari','kamis')->get(),
            'pel5_9'=>Jadwal::where('kelas','like','%'.$this->selectkls.'%')->where('jampel',9)->where('hari','jumat')->get(),
            #--------------------------------------------------------------------------------------------------------#
        ]);
    }
   

}
