<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $type_class;

    public array $types = [
        'primary' => 'bg-primary text-white',
        'outlined' => 'border border-primary text-primary',
        'secondary' => 'bg-secondary text-white'
    ];

    /**
     * Create a new component instance.
     */
    public function __construct( $type = 'primary')
    {
        $this->$type = $this->types[$type];
        $this->type_class = $this->types[$type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
