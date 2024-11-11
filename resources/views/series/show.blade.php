<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('All Series') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
          
                <h3 class="font-semibold text-lg mb-4">Series Details:</h3>
                    <x-series-details
                        :title="$series->title"
                        :image="$series->image"
                        :year="$series->year"
                        :description="$series->description"
                    />
                     <div class="mt-4">
                        <a href="{{ route('series.index') }}" class="bg-black-300 hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded border">
                            Back to Homepage 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

