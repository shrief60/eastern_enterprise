<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\externalRequests\GetNasdaqHistoricalData;
use App\Livewire\CompanyProfile;
use App\Models\Company;
use Livewire\Livewire;
use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the company profile Livewire component renders correctly.
     *
     * @return void
     */
    // public function testCompanyProfileComponentRenders()
    // {
    //     // // Create a sample company in the database for testing
    //     // $company = Company::factory()->create();

    //     // // Mock the external request to avoid actual API calls
    //     // $getAlphavantageScreener = $this->getMockBuilder(GetNasdaqHistoricalData::class)
    //     //     ->disableOriginalConstructor()
    //     //     ->getMock();

    //     // $getAlphavantageScreener->method('send')->willReturn([
    //     //     'data' => [
    //     //         'Time Series (5min)' => [
    //     //             '2023-01-01 09:00:00' => [
    //     //                 "1. open" => "162.3800",
    //     //                 "2. high" => "162.3800",
    //     //                 "3. low" => "162.3800",
    //     //                 "4. close" => "162.3800",
    //     //                 "5. volume" => "30"
    //     //             ],
    //     //             '2023-01-01 09:05:00' => [
    //     //                 "1. open" => "162.3800",
    //     //                 "2. high" => "162.3800",
    //     //                 "3. low" => "162.3800",
    //     //                 "4. close" => "162.3800",
    //     //                 "5. volume" => "30"
    //     //             ],
    //     //         ]
    //     //     ]
    //     // ]);
        
    //     // // Test the Livewire component
    //     // Livewire::test(CompanyProfile::class, ['getAlphavantageScreener' => $getAlphavantageScreener])
    //         ->assertSee($company->name) // Ensure the company name is displayed
    //         ->assertSee($company->owner->name) // Ensure the owner's name is displayed
    //         ->assertSee($company->owner->email) // Ensure the owner's name is displayed
    //         ->assertSee($company->description) // Ensure the owner's name is displayed
    //         ->assertSee('2023-01-01 09:00:00') // Ensure the stock data is displayed
    //         ->assertSee('2023-01-01 09:05:00'); // Ensure more stock data is displayed
    // }
}
