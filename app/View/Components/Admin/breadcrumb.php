<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $pageTitle,
        public string $rootPageRoute,
        public string $rootPage,
        public string $subPageRoute,
        public string $subPage,
        public string $active

    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.breadcrumb');
    }
}
