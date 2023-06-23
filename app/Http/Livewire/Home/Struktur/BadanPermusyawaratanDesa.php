<?php

namespace App\Http\Livewire\Home\Struktur;

use Livewire\Component;

class BadanPermusyawaratanDesa extends Component
{
    public function render()
    {
        return view('livewire.home.struktur.badan-permusyawaratan-desa')
            ->layout('layouts.public', [
                'title' => 'Badan Permusyawaratan Desa'
            ]);
    }
}
