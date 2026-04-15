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
            ->when(!empty($this->selectedSpecialties), function ($q) {
                $q->whereIn('speciality', $this->selectedSpecialties);
            })
            ->paginate(6);

        return view('livewire.professional-search', compact('professionals'));
    }
}
