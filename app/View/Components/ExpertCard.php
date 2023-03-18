<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ExpertCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $expert;

    public function __construct($expert)
    {
        $this->expert = $expert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.expert-card');
    }
}
