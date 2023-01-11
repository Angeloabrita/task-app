<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $delUrl, $editUrl, $showUrl;
    public $creator, $text, $date;
    public function __construct($delUrl, $editUrl, $showUrl,$creator, $text, $date)
    {
       
        $this->delUrl = $delUrl;
        $this->editUrl = $editUrl;
        $this->showUrl = $showUrl;
        $this->creator = $creator;
        $this->text = $text;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item');
    }
}
