<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteModal extends Component
{
    public string $action;

    public bool $confirmingModelDeletion = false;

    public function render(): mixed
    {
        return view('livewire.delete-modal');
    }
}
