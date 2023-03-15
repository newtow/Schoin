<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kelas;
use Livewire\WithPagination;
class AdminKelas extends Component
{
    protected $listeners =[
        'kelasstored',
        'kelasupdated'

    ];
    public $updateMode=False;
    use WithPagination;
    public function render()
    {
        return view('livewire.admin-kelas',[
            'kelas'=>kelas::latest()->paginate(6)
        ]);
    }
    public function getkelas($id){
        $this->updateMode=true;
       $kelas = Kelas::find($id);
       $this->emit('getkelas',$kelas);
       
    }
    public function destroy($id){
        if($id){
            $data = Kelas::find($id);
            $data->delete();
           

        }
    }
    public function kelasstored(){

        

    }
    public function kelasupdated(){

        $this->updateMode=false;

    }
}
