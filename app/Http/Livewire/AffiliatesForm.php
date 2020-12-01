<?php

namespace App\Http\Livewire;

use App\Models\Affiliate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AffiliatesForm extends Component
{
    use WithFileUploads;

    public Affiliate $affiliate;
    public $logo;

    protected $rules = [
        'affiliate.name' => 'required|min:5',
        'affiliate.url' => 'required|max:500',
        'affiliate.aff_id' => 'string',
        'logo' => 'image',
    ];

    public function mount(Affiliate $affiliate)
    {
        $this->affiliate = $affiliate ?? new Affiliate();
    }

    public function render()
    {
        return view('backend.affiliate.livewire.affiliate-form');
    }

    public function save()
    {
        $this->validate();

        $filename = $this->logo->store('affiliates', 'public');
        $this->affiliate->logo = $filename;

        $this->affiliate->save();

        return redirect()->route('affiliate.index');
    }

    public function updatedAffiliateName()
    {
        $this->validateOnly('affiliate.name');
    }
}
