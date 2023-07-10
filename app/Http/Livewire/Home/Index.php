<?php

namespace App\Http\Livewire\Home;

use App\Models\Gallery;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $datas = Gallery::orderBy('created_at', 'desc')->take(3)->get();

        return view('livewire.home.index', ['datas' => $datas])
            ->layout('layouts.public', [
                'title' => 'Home'
            ]);
    }
}
