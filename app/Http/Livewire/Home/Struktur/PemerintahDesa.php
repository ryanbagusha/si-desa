<?php

namespace App\Http\Livewire\Home\Struktur;

use Livewire\Component;

class PemerintahDesa extends Component
{
    public function render()
    {
        return view('livewire.home.struktur.pemerintah-desa')
            ->layout('layouts.public', [
                'title' => 'Pemerintah Desa'
            ]);
    }
}
