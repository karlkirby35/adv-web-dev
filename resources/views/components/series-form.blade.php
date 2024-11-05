@props(['action', 'method'])
<form action="{{ $action }}" method="POST" enctype="multipart/form-data">

 @csrf

 @if($method ===

 'PUT' || $method ===

 'PATCH')

 @method($method)

 @endif

 <!-- Title -->
<div class="mb-4">
<label for="title" class="block text-sm text-gray-700">Title</label>
<input

 type="text"

 name="title"

 id="title"

 value="{{ old('title', $series->title ?? '') }}"

 required

 class="mt-1 block w-full border-gray-300 rounded-md shadow-sm />

 @error('title')
<p class="text-sm text-red-600">{{ $message }}</p>

 @enderror
</div>

<!-- Description Field -->
<div class="mb-4">
    <label for="description" class="block text-sm text-gray-700">Description</label>
    <textarea 
        name="description" 
        id="description" 
        rows="6" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $series->description ?? '') }}</textarea>
    
    @error('description')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<!-- Release Year Field -->
<div class="mb-4">
    <label for="year" class="block text-sm text-gray-700">Release Year</label>
    <input 
        type="number" 
        name="year" 
        id="year" 
        min="1900" 
        max="{{ date('Y') }}" 
        value="{{ old('year', $series->year ?? '') }}" 
        required 
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    
    @error('year')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


<div class="mb-4">
<label for="image" class="block text-sm font-medium text-gray-700">Series Cover

 Image</label>
<input

 type="file"

 name="image"

 id="image"

 {{ isset($series) ? '' : 'required' }}

 class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-

 500 focus:border-indigo-500"

 />

 @error('image')
<p class="text-sm text-red-600">{{ $message }}</p>

 @enderror
</div>

 @isset($series->image)
<div class="mb-4">
<img src="{{ asset($series->image) }}" alt="Series cover" class="w-24 h-32 object-

 cover">
</div>

 @endisset
<div>
<x-primary-button>

 {{ isset($series) ? 'Update Series' : 'Add Series' }}
</x-primary-button>
</div>
</form>