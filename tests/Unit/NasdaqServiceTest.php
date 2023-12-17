<?php

namespace Tests\Unit;

use App\Services\Nasdaq\NasdaqService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class NasdaqServiceTest extends TestCase
{
    public function testGetDataHandlesClientError()
    {
        // Mocking Http facade
        $nasdaqService = new NasdaqService();

        // Mocking the Http::get method with a fake server error response
        Http::fake([
                config('services.iex.url') => Http::response(null, 400),
        ]);
        $url = config('services.iex.url')."/stock/gfhgfhg/quote?token=";

        $result = $nasdaqService->getData($url);

        $this->assertEquals(['data' => null, 'status' => 400], $result);
    }

    public function testGetDataHandlesServerError()
    {
        // Mocking Http facade
        $nasdaqService = new NasdaqService();

        // Mocking the Http::get method with a fake server error response
        Http::fake([
                config('services.iex.url') => Http::response(['error' => 'Server Error'], 500),
        ]);
        $url = config('services.iex.url')."/stock/gfhgfhg/quote?token=". config('services.iex.url');

        $result = $nasdaqService->getData($url);
        $this->assertEquals(['data' => ['error' => 'Server Error'], 'status' => 500], $result);
  
    }

    public function testGetDataHandlesSuccessfulResponse()
    {
        $nasdaqService = new NasdaqService();
        // Arrange
        Http::fake([
            config('services.iex.url') => Http::response(['response' => 'APPL'], 200),
        ]);

        // Act
        $url = config('services.iex.url')."/stock/AAPL/quote?token=". config('services.iex.url');

        $result = $nasdaqService->getData($url);

        // Assert
        $this->assertEquals(['data' => ['response' => 'APPL'], 'status' => 200], $result);

    }

    public function testGetHistoricalDataSuccessfullResponse()
    {
         // Mocking Http facade
         Http::fake();

         // Mocking config values
         Config::set('services.iex.url', 'mocked_url');
         Config::set('services.iex.key', 'mocked_key');
 
         // Mocking NasdaqService and the getData method
         $nasdaqServiceMock = $this->getMockBuilder(NasdaqService::class)
             ->onlyMethods(['getData'])
             ->getMock();
 
         // Expecting the getData method to be called with the correct URL
         $nasdaqServiceMock->expects($this->once())
             ->method('getData')
             ->with('mocked_url/v1/data/core/historical_prices/AAPL?range=1m&token=mocked_key')
             ->willReturn(['data' => 'fake_data', 'status' => 200]);
 
         // Call the actual method
         $parameters = ['symbol' => 'AAPL'];
         $result = $nasdaqServiceMock->getHistoricalData($parameters);
 
         // Assertions
         $this->assertEquals(['data' => 'fake_data', 'status' => 200], $result);
    }

    public function testGetRealTimeDataSuccessfullResponse()
    {
        // Mocking Http facade
        Http::fake();

        // Mocking config values
        Config::set('services.iex.url', 'mocked_url');
        Config::set('services.iex.key', 'mocked_key');

        // Mocking NasdaqService and the getData method
        $nasdaqServiceMock = $this->getMockBuilder(NasdaqService::class)
            ->onlyMethods(['getData'])
            ->getMock();

        // Expecting the getData method to be called with the correct URL
        $nasdaqServiceMock->expects($this->once())
            ->method('getData')
            ->with('mocked_url/stable/stock/AAPL/quote?token=mocked_key')
            ->willReturn(['data' => 'fake_data', 'status' => 200]);

        // Call the actual method
        $parameters = ['symbol' => 'AAPL'];
        $result = $nasdaqServiceMock->getRealTimeData($parameters);
        
        // Assertions
        $this->assertEquals(['data' => 'fake_data', 'status' => 200], $result);
    
    }

}