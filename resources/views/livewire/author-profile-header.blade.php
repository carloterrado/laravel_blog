<div class="flex items-center justify-between mb-2 px-4">

    <div class="flex items-center space-x-4">
        <img class="w-10 h-10 rounded-full" src="{{ $author->picture }}" alt="">
        <div class=" dark:text-white">
            <div class="font-medium">{{ $author->username }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">{{ $author->name }} | {{ $author->authorType->name }}
            </div>
        </div>
    </div>

    <div>
        <input type="file" name="file" id="changeAuthorPictureFile" class="hidden" onchange="this.dispatchEvent(new InputEvent('input'))">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" onclick="event.preventDefault();document.getElementById('changeAuthorPictureFile').click()">Change picture</button>
    </div>

</div>
