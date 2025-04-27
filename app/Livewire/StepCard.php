<?php

namespace App\Livewire;

use Livewire\Component;

class StepCard extends Component
{
    public $heading;
    public $description;
    public $number;
    public $src;

    public function mount($heading,$description,$number,$src)
    {
        $this->heading = $heading;
        $this->description = $description;
        $this->number = $number;
        $this->src = $src;
    }
    public function render()
    {
        return view('livewire.step-card');
    }
}
