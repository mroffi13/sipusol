<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComboBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name, $id, $label, $type;
    public function __construct($name, $id, $label, $type = '')
    {
        //
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.combo-box');
    }
}
