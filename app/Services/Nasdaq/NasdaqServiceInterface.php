<?php

namespace App\Services\Nasdaq;

use App\Models\Company;
use Illuminate\Support\Collection;

interface NasdaqServiceInterface
{
    public function getHistoricalData(array $parameters) :array;

    public function getRealTimeData(array $parameters) :array;

    public function getData(string $url) :array;
  
}
