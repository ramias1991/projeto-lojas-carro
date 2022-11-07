<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public string $logoImg;
    public string $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $logoImg, string $title)
    {
        $this->logoImg = $logoImg;
        $this->title = $title;
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
