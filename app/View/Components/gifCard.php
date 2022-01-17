<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gifCard extends Component
{
    public $gif;
    public function __construct($gif)
    {
        $this->gif = $gif;
    }
    public function render()
    {
        return view('components.gif-card');
    }
}
