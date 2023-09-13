<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Envelope;

class PrintSpn extends Component
{
    public $envelope;

    public function mount($envelope)
    {
        $this->envelope = Envelope::find($envelope);
    }
    public function render()
    {
        return view('livewire.admin.print-spn')
            ->layout('layouts.print', [
                'title' => 'Surat Pengantar Nikah'
            ]);
    }
}
