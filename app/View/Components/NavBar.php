<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{
    public $userName, $tokenApi;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userName,  $tokenApi)
    {
        $this->userName = $userName;
        $this->tokenApi = $tokenApi;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-bar');
    }
}
