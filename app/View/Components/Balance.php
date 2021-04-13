<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Balance extends Component
{
    public $icon;
    public $value;
    public $color;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param $icon
     * @param $value
     * @param $color
     * @param $title
     */
    public function __construct($icon,$value,$color,$title)
    {

        $this->icon = $icon;
        $this->value = $value;
        $this->color = $color;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.balance');
    }
}
