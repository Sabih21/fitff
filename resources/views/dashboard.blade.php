
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight d-flex justify-content-between">
            {{ __('Dashboard') }}
            <a href="{{ url('/customer/search') }}" class="btn btn-primary btn-sm active " role="button" aria-pressed="true">Customers</a>

        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" >
                    {{ __("You're logged in!") }}
                </div>
            </div>
            {{-- <a href="" class="btn btn-primary  active mt-10" role="button" aria-pressed="true">Customers</a> --}}
        </div>
    </div>
</x-app-layout>
