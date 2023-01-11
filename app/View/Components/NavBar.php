<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{
    public $userName, $logoutUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userName, $logoutUrl)
    {
        $this->userName = $userName;
        $this->logoutUrl = $logoutUrl;
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
