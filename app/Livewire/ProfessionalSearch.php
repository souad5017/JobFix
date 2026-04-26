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
    public function doSearch()
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

        $query = Professional::with(['user', 'category'])
            ->withAvg('reviews', 'rating')
            ->withCount([
                'requests as completed_services_count' => function ($q) {
                    $q->where('status', 'accepted')
                        ->where('progress', 'completed');
                }
            ]);

        if ($this->search) {
            $query->where(function ($q) {
                $q->whereHas('user', function ($q2) {
                    $q2->where(function ($sub) {
                        $sub->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('city', 'like', '%' . $this->search . '%');
                    });
                })
                    ->orWhereHas('category', function ($q2) {
                        $q2->where('name', 'like', '%' .$this->search . '%');
                    });
            });
        }

        if (!empty($this->selectedSpecialties)) {
            $query->whereIn('category_id', $this->selectedSpecialties);
        }

        if ($this->rating) {
            $query->having('reviews_avg_rating', '>=', $this->rating);
        }

        $professionals = $query->latest()->paginate(6);

        return view('livewire.professional-search', [
            'professionals' => $professionals,
            'categories' => $categories,
        ]);
    }
}
