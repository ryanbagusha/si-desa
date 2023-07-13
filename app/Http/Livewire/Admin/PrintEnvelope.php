<?php

namespace App\Http\Livewire\Admin;

use App\Models\Envelope;
use Livewire\Component;

class PrintEnvelope extends Component
{
    public $envelope;

    public function mount($envelope)
    {
        $this->envelope = Envelope::find($envelope);
    }

    public function render()
    {
        return view('livewire.admin.print-envelope')
        ->layout('layouts.print', [
            'title' => 'Surat Keterangan Usaha'
        ]);
    }
}
