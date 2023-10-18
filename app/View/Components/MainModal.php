<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainModal extends Component
{
    
    public function __construct(
        public string $name,
        public ?string $title = null,
        public ?string $footer = null,
    )
    {
    
    }

    public function render(): View|Closure|string
    {
        return view('components.main-modal');
    }
}
