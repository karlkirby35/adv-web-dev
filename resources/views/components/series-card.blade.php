@props(['title', 'description', 'image', 'year'])

<div class="border rounded-lg shadow-md p-6 bg-white hover: shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>  
    <img src="{{asset( 'images/series/' .$image)}}" alt="{{$title}}">
    <p class="text-gray-800 mt-4">{{ $description }}</p>
   
    <p class="text-gray-600">({{ $year }})</p>
</div>
   