<?php

namespace App\Livewire;

use Livewire\Component;
use App\externalRequests\GetNasdaqHistoricalData;
use App\Services\Nasdaq\NasdaqServiceInterface;

class CompanyHistoricalData extends Component
{

    public $symbol;
    public $companyStocks;
    public function mount($symbol)
    {
        $this->symbol = $symbol;
        $this->getcompanyStocks();
    }

    public function render()
    {
        return view('livewire.company-historical-data');
    }

    public function getcompanyStocks() : void
    {
        $parameters = [
            'symbol' => $this->symbol, 
        ];
        $result = resolve(NasdaqServiceInterface::class)->getHistoricalData($parameters);

        $this->companyStocks = $result['data'] ?? [];
    }
}
