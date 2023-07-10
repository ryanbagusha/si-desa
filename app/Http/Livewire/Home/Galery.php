<?php

namespace App\Http\Livewire\Home;

use App\Models\Gallery;
use Livewire\Component;

class Galery extends Component
{
    public function render()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        return view('livewire.home.galery', ['galleries' => $galleries])
            ->layout('layouts.public', [
                'title' => 'Galeri'
            ]);
    }
}
