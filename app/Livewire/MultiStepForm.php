<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MultiStepForm extends Component
{
    public $currentStep = 1;
    public $totalSteps = 3;

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
