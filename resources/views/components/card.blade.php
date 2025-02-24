@props(['highlight' => false])

<div @class([
        'bg-gray-900 shadow-lg rounded-lg p-4 transition duration-300 transform hover:shadow-xl',
        'border-l-4 border-red-600' => $highlight,
        'border border-gray-600' => !$highlight,
        'hover:bg-black',
        'max-w-md mx-auto',
        'group'
    ])>

    <div class="flex justify-between items-center transition-transform duration-300">
        <span class="text-lg font-semibold text-white transition-transform duration-300 transform group-hover:translate-x-2">
            {{ $slot }}
        </span>
        <a {{ $attributes }} class="ml-4 inline-block px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-lg hover:bg-red-700 transition duration-300 transform group-hover:-translate-x-2 hover:scale-105">
            View Details
        </a>
    </div>
</div>
