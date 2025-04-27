<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonSecondary extends Component
{
    public $href;
    public $heading;

    public function mount($href,$heading): void
    {
        $this->href = $href;
        $this->heading = $heading;
    }

    public function render()
    {
        return view('livewire.button-secondary');
    }
}
