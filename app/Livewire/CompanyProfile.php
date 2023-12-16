<?php

namespace App\Livewire;

use App\Models\Company;
use App\Services\Company\CompanyServiceInterface;
use Livewire\Component;

class CompanyProfile extends Component
{
    public $company;
    public function mount($symbol)
    {
        // Fetch company data from the database
        $this->company = resolve(CompanyServiceInterface::class)->get($symbol);
    }

    
    public function render()
    {
        return view('livewire.company-profile');
    }


}
