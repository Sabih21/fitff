<x-app-layout>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('customer.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search for a customer">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark bg-secondary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-lg-6">
            <h2 class="mb-3 custom-heading">Search Results:</h2>
            <div class="list-group">
                @forelse ($customers as $customer)
                    {{-- <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $customer->name }}</h5>
                        <!-- You can display more customer information here if needed -->
                    </a> --}}
                    <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <h5 class="mb-1">{{ $customer->name }}</h5>
                        <a href="{{ url('customer') }}" type="button" class="btn btn-dark bg-dark btn-sm">Payment</a>
                    </div>
                @empty
                    <p>No results found.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
</x-app-layout>
