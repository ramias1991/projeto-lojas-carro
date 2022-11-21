<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchCarsBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-cars-bar');
    }

    public function marcas()
    {
        $marcas = [
            0 => [
                'id' => 0,
                'descricao' => 'Audi'
            ],
            1 => [
                'id' => 0,
                'descricao' => 'Chevrolet'
            ],
            2 => [
                'id' => 0,
                'descricao' => 'Ford'
            ],
            3 => [
                'id' => 0,
                'descricao' => 'Peugeot'
            ],
            4 => [
                'id' => 0,
                'descricao' => 'Renault'
            ],
            5 => [
                'id' => 0,
                'descricao' => 'VolksWagen'
            ],
        ];
        return $marcas;
    }
}
