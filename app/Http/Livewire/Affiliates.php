<?php

namespace App\Http\Livewire;

use App\Models\Affiliate;
use Livewire\Component;
use Livewire\WithPagination;

class Affiliates extends Component
{
    use WithPagination;

    public $categories;
    public $searchQuery;
    public $searchCategory;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->searchQuery = '';
        $this->searchCategory = '';
    }

    public function render()
    {
        $affiliates = Affiliate::when($this->searchQuery != '', function($query) {
                $query->where('name', 'like', '%'.$this->searchQuery.'%');
            })->paginate(10);

        return view('backend.affiliate.livewire.index', [
            'affiliates' => $affiliates
        ]);
    }

    public function deleteProduct($affiliate_id)
    {
        Affiliate::find($affiliate_id)->delete();
    }
}
