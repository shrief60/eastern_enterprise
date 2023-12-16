<?php

namespace App\Services\Nasdaq;

use App\Services\Nasdaq\NasdaqServiceInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NasdaqService implements NasdaqServiceInterface
{
    public function  __construct(){}

    public function getHistoricalData(array $parameters) :array
    {
        $symbol = $parameters['symbol'];
        $url = config('services.iex.url')."/v1/data/core/historical_prices/{$symbol}?range=1m&token=". config('services.iex.key');
        return $this->getData($url);
    }

    public function getRealTimeData(array $parameters) :array
    {
        $symbol = $parameters['symbol'];
        $url = config('services.iex.url')."/stable/stock/{$symbol}/quote?token=". config('services.iex.key');
        return $this->getData($url);
    }

    public function getData(string $url) :array
    {
        $response = Http::get($url);
        if($response->clientError())
            Log::error(__CLASS__.' '.__FUNCTION__." ClientException", ['response' => ['status' => 400 , 'data' => $response]]);

        if($response->serverError())
            Log::error(__CLASS__.' '.__FUNCTION__." ServerException", ['response' => ['status' => 500 , 'data' => $response]]);
        return [
            'data' => $response->json(),
            'status' => $response->status()
        ];
    }

    
  
}
