<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public string $logoImg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $logoImg)
    {
        $this->logoImg = $logoImg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
