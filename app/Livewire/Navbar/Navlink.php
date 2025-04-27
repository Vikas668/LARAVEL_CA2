<?php

namespace App\Livewire\Navbar;
use Illuminate\View\View;
use Livewire\Component;

class Navlink extends Component
{

    public $href;
    public $active;
    public $heading;
    public function mount($href,$heading,$active): void
    {
        $this->href = $href;
        $this->heading = $heading;
        $this->active = $active;
    }
    public function render()
    {
        return view('livewire.navbar.navlink');
    }
}
