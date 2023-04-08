<div class="flex items-center justify-between mb-2">
    <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
        {{$author->username}} | {{$author->authorType->name}}
    </p>
    <div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Message</button>
    </div>
</div>