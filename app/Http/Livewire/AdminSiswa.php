<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Siswa;
class AdminSiswa extends Component
{
    protected $listeners =[
        'siswastored',
        'siswaupdated'

    ];
    public $updateMode=False;
    use WithPagination;
    public function render()
    {
        return view('livewire.admin-siswa',[
            'siswa'=>Siswa::latest()->paginate(6)
        ]);
    }
    public function getsiswa($id){
        $this->updateMode=true;
       $siswa = siswa::find($id);
       $this->emit('getsiswa',$siswa);
       
    }
    public function destroy($id){
        if($id){
            $data = Siswa::find($id);
            $data->delete();
           

        }
    }
    public function siswastored(){

        

    }
    public function siswaupdated(){

        $this->updateMode=false;

    }
}
