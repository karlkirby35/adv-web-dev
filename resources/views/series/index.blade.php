<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Series') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Series:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        
                    @foreach($series as $series)
                        <div class="bg-white border rounded-lg shadow-md p-4">
                            <a href="{{ route('series.show', $series) }}">
                                <x-series-card
                                    :title="$series->title"
                                    :image="$series->image"
                                    :year="$series->year"
                                    :description="$series->description"
                                />
                            </a>

                            <!-- Edit button -->
                            <div class="mt-4 flex space-x-2 justify-between">
                                <a href="{{ route('series.edit', $series) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-1 px-3 rounded">
                                    Edit
                                </a>

                            <!-- Delete Button -->
                                <form action="{{ route('series.destroy', $series) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this series?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                        Delete
                                    </button>

                                    
                                </form>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
