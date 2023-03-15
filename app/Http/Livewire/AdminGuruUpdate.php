<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guru;
class AdminGuruUpdate extends Component
{
    public $guruid,$nuptk,$namaguru,$codeguru,$mapel,$kelas,$jabatan;
    protected $listeners = [
        'getguru'
    ];
    public function render()
    {
        return view('livewire.admin-guru-update');
    }

    public function getguru($guru){
        $this->guruid = $guru['id'];
        $this->mapel=$guru['mapel'];
        $this->kelas=$guru['kelas'];
        $this->nuptk=$guru['nuptk'];
        $this->namaguru=$guru['namaguru'];
        $this->jabatan=$guru['jabatan'];
        $this->codeguru=$guru['codeguru'];
        
    }
    public function updateguru(){

        $this->validate([
            'mapel'=>'required',
            'kelas'=>'required',
            'nuptk'=>'required',
            'namaguru'=>'required',
            'jabatan'=>'required',
            'codeguru'=>'required',
            
            
            
        ]); 
        if($this->guruid){
            $guru = Guru::find($this->guruid);
        $guru->update([
            'mapel'=>$this->mapel,
            'kelas'=>$this->kelas,
            'nuptk'=>$this->nuptk,
            'namaguru'=>$this->namaguru,
            'jabatan'=>$this->jabatan,
            'codeguru'=>$this->codeguru,
          
        ]);
        $this->resetinput();
        $this->emit('guruupdated',$guru);
    }
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
