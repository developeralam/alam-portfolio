<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Dashboard extends Component
{
    public function test()
    {
        dd('test');
    }
    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
