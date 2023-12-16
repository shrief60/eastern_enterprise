<div>
    <div class="flex flex-wrap justify-center p-6">
        @foreach($companies as $company)
            <a href="{{ route('company-details', $company->symbol) }}" wire:navigate class="max-w-md mx-4 my-4 bg-white overflow-hidden shadow-md rounded-md">
                <img src="{{ asset('storage/'.$company->logo) }}" alt="{{ $company->name }} Logo" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $company->name }}</h3>
                    <p class="text-gray-600">{{ $company->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
