<?php

namespace App\View\Components;

use Illuminate\View\Component;

class script extends Component
{
    public $source;

    public function __construct(string $folder = '', string $file = '')
    {
        $path = 'assets/js/views';

        $this->source = $path . '/' . $folder . '/' . $file . '.js';
    }

    public function render()
    {
        return view('components.import.script');
    }
}
