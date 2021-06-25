<?php

namespace Laravel\Jetstream\Http\Livewire;

use Livewire\Component;

class NavMenu extends Component
{
    /**
     * The component's listeners.
     *
     * @var array
     */
    protected $listeners = [
        'refresh-nav-menu' => '$refresh',
    ];

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('admin.nav-menu');
    }
}
