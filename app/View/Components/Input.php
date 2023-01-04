<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $title;
    public $image;
    public $tit;
    public $imag;
    public $name;
    public $bio;
    public $surname;
 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$image,$tit,$imag,$name,$bio,$surname)
    {
        $this->title=$title;
        $this->image=$image;
        $this->tit=$tit;
        $this->imag=$imag;
        $this->name=$name;
        $this->bio=$bio;
        $this->surname=$surname;




    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}