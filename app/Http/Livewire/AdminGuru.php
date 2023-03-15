<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Guru;
class AdminGuru extends Component
{
    protected $listeners =[
        'gurustored',
        'guruupdated'

    ];
    public $updateMode=False;
    use WithPagination;
    public function render()
    {
        return view('livewire.admin-guru',[
            'guru'=>Guru::latest()->paginate(6)
        ]);
    }
    public function getguru($id){
        $this->updateMode=true;
       $guru = Guru::find($id);
       $this->emit('getguru',$guru);
       
    }
    public function destroy($id){
        if($id){
            $data = Guru::find($id);
            $data->delete();
           

        }
    }
    public function gurustored(){

        

    }
    public function guruupdated(){

        $this->updateMode=false;

    }
}
