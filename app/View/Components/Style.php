<?php

namespace App\View\Components;

use Illuminate\View\Component;

class style extends Component
{
    public $source;

    public function __construct(string $folder = '', string $file = '')
    {
        $path = 'assets/css/views';

        $this->source = $path . '/' . $folder . '/' . $file . '.css';
    }

    public function render()
    {
        return view('components.import.style');
    }
}
