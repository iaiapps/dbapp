<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('components.modal');
    }
}
