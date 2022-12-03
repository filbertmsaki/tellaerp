<?php

namespace App\View\Components\Admin\Layouts\Header;

use Illuminate\View\Component;

class UserMenuComponent extends Component
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
        return view('components.admin.layouts.header.user-menu-component');
    }
}
