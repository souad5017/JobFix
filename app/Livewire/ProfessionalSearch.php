<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Professional;

class ProfessionalSearch extends Component
{
    use WithPagination;

public $search = '';
public $selectedSpecialties = [];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $categories = Category::all();

        $professionals = Professional::with('user')
            ->when($this->search, function ($q) {
                $q->whereHas('user', function ($q2) {
                    $q2->where('name', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->selectedSpecialties, function ($q) {
                $q->whereIn('category_id', $this->selectedSpecialties);
            })
            ->paginate(6);

        return view('livewire.professional-search', compact('professionals', 'categories'));
    }
}
