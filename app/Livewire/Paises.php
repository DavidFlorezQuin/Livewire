<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $paises = [
        'Colombia',
        'Perú',
        'Venezuela', 
        'Argentina'
    ];
    public $pais;

    public function save(){
        array_push($this->paises, $this->pais); 
        $this->reset('pais');
    }

    public function delete(){
        
    }

    public function render()
    {
        return view('livewire.paises');
    }
}
