<?php

namespace App\Livewire;

use Livewire\Component;

class InfoCard extends Component
{
    public $src;
    public $headingLine1;
    public $headingLine2;
    public $description;

    public function mount($headingLine1,$headingLine2,$description,$src): void
    {
        $this->headingLine1 = $headingLine1;
        $this->headingLine2 = $headingLine2;
        $this->description = $description;
        $this->src = $src;
    }

    public function render()
    {
        return view('livewire.info-card');
    }
}
