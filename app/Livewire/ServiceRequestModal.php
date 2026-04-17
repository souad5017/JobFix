<?php

namespace App\Livewire;

use App\Models\Professional;
use Livewire\Component;
use Livewire\Attributes\On;

class ServiceRequestModal extends Component
{
    public $show = false;
    public $professional;
    public $message = '';

#[On('openRequestModal')]
public function open($professionalId)
{
    $this->professional = Professional::with('user', 'category')
        ->find($professionalId);

    if (!$this->professional) return;

    $this->show = true;
     dd($professionalId);
}

    public function close()
    {
        $this->show = false;
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.service-request-modal');
    }
}