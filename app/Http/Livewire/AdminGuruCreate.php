<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guru;
class AdminGuruCreate extends Component
{
    public $nuptk,$namaguru,$codeguru,$mapel,$kelas,$jabatan;
    public function render()
    {
        return view('livewire.admin-guru-create');
    }
    public function storeguru(){

        $this->validate([
            'mapel'=>'required',
            'kelas'=>'required',
            'nuptk'=>'required',
            'namaguru'=>'required',
            'jabatan'=>'required',
            'codeguru'=>'required',
            
            
            
        ]); 
        $guru=Guru::create([
            'mapel'=>$this->mapel,
            'kelas'=>$this->kelas,
            'nuptk'=>$this->nuptk,
            'namaguru'=>$this->namaguru,
            'jabatan'=>$this->jabatan,
            'codeguru'=>$this->codeguru,
          
        ]);
        $this->resetinput();
        $this->emit('gurustored',$guru);
     
    }
    private function resetinput(){
             $this->mapel=null;
            $this->kelas=null;
            $this->nuptk=null;
            $this->namaguru=null;
            $this->jabatan=null;
            $this->codeguru=null;
    }
}
