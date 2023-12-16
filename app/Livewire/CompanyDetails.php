<?php

namespace App\Livewire;
use App\externalRequests\GetNasdaqRealTimeData;
use App\Services\Nasdaq\NasdaqServiceInterface;
use Livewire\Component;

class CompanyDetails extends Component
{
    public $symbol, $companyFinancialDetails;

    public function mount(string $symbol)
    {
        $this->symbol = $symbol;
        $this->getCompanyRealTimeFinancialDetails();
    }

    public function render()
    {
        return view('livewire.company-details');
    }

    public function getCompanyRealTimeFinancialDetails() : void
    {
        $parameters = [
            'symbol' => $this->symbol,
        ];

        $result = resolve(NasdaqServiceInterface::class)->getRealTimeData($parameters);

        $this->companyFinancialDetails = $result['data'] ?? null;
    }
}
