<?php

namespace App\Livewire;

use App\Models\Company;
use App\Services\Company\CompanyServiceInterface;
use Livewire\Component;

class HomePage extends Component
{
    public $companies;

    public function mount()
    {
        $this->companies = resolve(CompanyServiceInterface::class)->gatAll();

    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
