<?php

namespace App\Http\Livewire\Home;

use App\Models\Gallery;
use Livewire\Component;

class ShowGalery extends Component
{
    public $gallery;

    public function mount($id)
    {
        $this->gallery = Gallery::find($id);
    }

    public function render()
    {
        // dd($this->gallery);
        return view('livewire.home.show-galery')
            ->layout('layouts.public', [
                'title' => $this->gallery->title
            ]);
    }
}
