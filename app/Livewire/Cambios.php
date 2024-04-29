<?php

namespace App\Livewire;

use Livewire\Component;

class Cambios extends Component
{
    public $ordenador = null;

    public function borrar()
    {
        $this->ordenador->cambios()->delete();
    }

    public function render()
    {
        return view('livewire.cambios');
    }
}
