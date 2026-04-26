<div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors group flex justify-between items-center cursor-pointer">
    <div>
        <h4 class="font-bold text-on-surface">Custom Cabinetry</h4>
        <p class="text-sm text-secondary">Bespoke storage solutions</p>
    </div>
    <div class="text-right">
        <span class="text-xs uppercase text-secondary/60 block">Starting at</span>
        <span class="text-lg font-extrabold text-primary-container">$450</span>
    </div>
</div>




<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Professional;
use Livewire\Component;
use Livewire\WithPagination;

class ProfessionalSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $rating = 0;
    public $selectedSpecialties = [];

    protected $updatesQueryString = [
        'search',
        'rating'
    ];


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingRating()
    {
        $this->resetPage();
    }

    public function updatingSelectedSpecialties()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->search = '';
        $this->rating = 0;
        $this->selectedSpecialties = [];
    }

    public function render()
    {
        $categories = Category::all();

        $professionals = Professional::with(['user', 'category'])
        ->withCount([
            'requests as completed_services_count' => function ($q) {
                $q->where('status', 'accepted')
                    ->where('progress', 'completed');
            }
        ])
            ->withAvg('reviews', 'rating')
            ->when($this->search, function ($q) {
                $q->where(function ($query) {
                    $query->whereHas('user', function ($q2) {
                        $q2->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('city', 'like', '%' . $this->search . '%');
                    })
                        ->orWhereHas('category', function ($q2) {
                            $q2->where('name', 'like', '%' . $this->search . '%');
                        });
                });
            })
            ->when(!empty($this->selectedSpecialties), function ($q) {
                $q->whereIn('category_id', $this->selectedSpecialties);
            })
            ->when($this->rating, function ($q) {
                $q->having('reviews_avg_rating', '>=', $this->rating);
            })
            ->latest()
            ->paginate(6);
        $completedServicesCount = Professional::withCount([
            'requests as completed_services_count' => function ($q) {
                $q->where('status', 'accepted')
                    ->where('progress', 'completed');
            }
        ])->get();

        return view('livewire.professional-search', [
            'professionals' => $professionals,
            'categories' => $categories,
            'completedServicesCount' => $completedServicesCount
        ]);
    }
}
