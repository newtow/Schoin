<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guru;
class GuruIndex extends Component
{
    public function render()
    {
        return view('livewire.guru-index',[
            'guru'=>Guru::all()
        ]);
    }
}
