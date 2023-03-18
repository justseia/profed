<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfessionInfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $profession;

    public function __construct($profession)
    {
        $this->profession = $profession;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profession-info');
    }
}
