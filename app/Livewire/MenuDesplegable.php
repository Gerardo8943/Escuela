<?php

namespace App\Livewire;

use Livewire\Component;

class MenuDesplegable extends Component
{

    public $open = false;
    public $heading;
     public $icon = 'folder';
    public $items=[];
    public function toggle()
    {
        $this->open = !$this->open;
    }
    public function render()
    {
        return view('livewire.menu-desplegable');
    }
}
