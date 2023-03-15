<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use Livewire\WithPagination;
use Livewire\Component;

class AdminJadwal extends Component
{
    protected $listeners =[
        'jadwalstored',
        'jadwalupdated'

    ];
    public $updateMode=False;
    use WithPagination;
    public function render()
    {
        return view('livewire.admin-jadwal',[
            'jadwal'=>Jadwal::latest()->paginate(6)
        ]);
    }
    public function getjadwal($id){
        $this->updateMode=true;
       $jadwal = Jadwal::find($id);
       $this->emit('getjadwal',$jadwal);
       
    }
    public function destroy($id){
        if($id){
            $data = Jadwal::find($id);
            $data->delete();
           

        }
    }
    public function jadwalstored(){

        

    }
    public function jadwalupdated(){

        $this->updateMode=false;

    }
}
