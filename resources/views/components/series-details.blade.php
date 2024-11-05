@props(['title', 'description', 'image', 'year'])

<div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">


    <!-- Series Title -->
    <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $title }}</h4>
    
    

  



    <!-- Series Imagery -->
    <img src="{{asset( 'images/series/' .$image)}}" alt="{{$title}}" class="w-full h-80 object-cover rounded-md mb-4">

  <!-- Series Description -->
    <p class="text-gray-800 mt-4">{{ $description }}</p>

    <!-- Series Publication Year -->
    <p class="text-gray-600">({{ $year }})</p>



</div>