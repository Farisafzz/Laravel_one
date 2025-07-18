<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataAos extends Component
{
    public $title;
    public $icon;
    public $delay;
    public $animation;

    public function __construct($title, $icon, $delay = 200, $animation = 'fade-up')
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->delay = $delay;
        $this->animation = $animation;
    }

    public function render()
    {
        return view('components.data-aos');
    }
}
