<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProcessStep extends Component
{
    public $step;
    public $icon;
    public $title;
    public $delay;

    public function __construct($step, $icon, $title, $delay = 200)
    {
        $this->step = $step;
        $this->icon = $icon;
        $this->title = $title;
        $this->delay = $delay;
    }

    public function render()
    {
        return view('components.process-step');
    }
}
