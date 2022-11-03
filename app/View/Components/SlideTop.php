<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlideTop extends Component
{
    public int $countImagesSlide;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->countImagesSlide = count($this->imagesSlide());
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-top');
    }

    public function imagesSlide()
    {
        $imagesSlide = [
            0 => [
                'imageSrc' => 'carro1.jpeg',
                'imageName' => 'Carro 1'
            ],
            1 => [
                'imageSrc' => 'carro2.jpeg',
                'imageName' => 'Carro 2'
            ],
        ];

        return $this->setPosImage($imagesSlide);
    }

    private function setPosImage($imagesSlide)
    {
        $imagesWithPos = [];
        $pos = 1;
        foreach($imagesSlide as $imageSlide){
            $imageSlide['pos'] = $pos;
            $imagesWithPos[] = $imageSlide;
            $pos++;
        }

        return $imagesWithPos;
    }
}
