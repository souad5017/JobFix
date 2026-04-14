<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Professional;

class ProfessionalSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $speciality = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $professionals = Professional::with('user')
            ->when($this->search, function ($q) {
                $q->whereHas('user', function ($q2) {
                    $q2->where('name', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->speciality, function ($q) {
                $q->where('speciality', $this->speciality);
            })
            ->paginate(6);

        return view('livewire.professional-search', compact('professionals'));
    }
}
