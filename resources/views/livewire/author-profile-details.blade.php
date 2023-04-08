<form method="post" wire:submit.prevent="UpdateDetails()">
    <div class="grid grid-cols-6 gap-2">
        <div class="col-span-6 md:col-span-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('name')
            <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="col-span-6 md:col-span-2">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" id="username" wire:model="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('username')
            <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="col-span-6 md:col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="text" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
            @error('email')
            <p class="text-sm text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="col-span-6">
            <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biography</label>
            <textarea id="biography" wire:model="biography" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your biography here..."></textarea>
        </div>
        @error('biography')
        <p class="text-sm text-red-500">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4  focus:outline-none ">Save changes</button>
</form>