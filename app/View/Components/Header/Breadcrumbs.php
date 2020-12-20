<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public function render()
    {
        return view('layouts.header.breadcrumbs');
    }
}
