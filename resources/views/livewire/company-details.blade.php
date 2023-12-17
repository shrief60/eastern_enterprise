
<div class="flex flex-wrap justify-evenly items-center p-6 mx-md " wire:poll.60s>
    @if($companyFinancialDetails)
        <div class="max-w-md  bg-white shadow-md rounded-md p-6 basis-full lg:basis-1/3 my-1">
            <h1 class="text-2xl font-semibold mb-4">{{ $companyFinancialDetails['companyName'] }} ({{ $companyFinancialDetails['symbol'] }})</h1>
            
            <div>
                <p class="text-gray-600">Latest Price: ${{ $companyFinancialDetails['latestPrice'] }}</p>
                <p class="text-gray-600">Change: ${{ $companyFinancialDetails['change'] }} ({{ $companyFinancialDetails['changePercent'] }}%)</p>
                <p class="text-gray-600">Volume: {{ $companyFinancialDetails['latestVolume'] }}</p>
                <!-- Add more data points as needed -->
            </div>
        </div>
        <div class="max-w-md bg-white shadow-md rounded-md p-6 basis-full lg:basis-1/3 my-1">
            <h1 class="text-2xl font-semibold mb-4">{{ $companyFinancialDetails['companyName'] }} ({{ $companyFinancialDetails['symbol'] }})</h1>
            
            <div>
                <p class="text-gray-600">Open: ${{ $companyFinancialDetails['open'] }}</p>
                <p class="text-gray-600">High: ${{ $companyFinancialDetails['high'] }}</p>
                <p class="text-gray-600">Low: {{ $companyFinancialDetails['low'] }}</p>
                <!-- Add more data points as needed -->
            </div>
        </div>
        <div class="max-w-md bg-white shadow-md rounded-md p-6 basis-full lg:basis-1/3 my-1">
            <h1 class="text-2xl font-semibold mb-4">{{ $companyFinancialDetails['companyName'] }} ({{ $companyFinancialDetails['symbol'] }})</h1>
            
            <div>
                <p class="text-gray-600">Avgerage Total Volume: ${{ $companyFinancialDetails['avgTotalVolume'] }}</p>
                <p class="text-gray-600">Market Capacity: ${{ $companyFinancialDetails['marketCap'] }} </p>
                <p class="text-gray-600">Currency: {{ $companyFinancialDetails['currency'] }}</p>
                <!-- Add more data points as needed -->
            </div>
        </div>
    @endif
</div>