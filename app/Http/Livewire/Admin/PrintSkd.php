<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Envelope;

class PrintSkd extends Component
{
    public $envelope;

    public function mount($envelope)
    {
        $this->envelope = Envelope::find($envelope);
    }

    public function render()
    {
        return view('livewire.admin.print-skd')
            ->layout('layouts.print', [
                'title' => 'Surat Keterangan Usaha'
            ]);
    }
}
