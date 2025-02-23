@props(['highlight' => false])

<div @class(['bg-white shadow-lg rounded-lg p-6 transition duration-300', 
             'ring ring-blue-500' => $highlight, 
             'border border-gray-200' => !$highlight])>

    <div class="flex justify-between items-center">
        <span class="text-lg font-semibold text-gray-800">{{ $slot }}</span>
        <a {{ $attributes }} class="ml-4 inline-block px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-blue-500 transition duration-300">
            View Details
        </a>
    </div>
</div>