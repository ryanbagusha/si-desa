<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Galery extends Component
{
    public function render()
    {
        return view('livewire.home.galery')
            ->layout('layouts.public', [
                'title' => 'Galeri'
            ]);
    }
}
