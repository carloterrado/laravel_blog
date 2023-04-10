<form method="post" wire:submit.prevent="changePassword()">
    <div class="grid grid-cols-6 gap-2">

        <div class="mb-6 col-span-6 md:col-span-2">
            <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                password</label>
            <input type="password" id="current_password" wire:model="current_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter current password">
            @error('current_password')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 col-span-6 md:col-span-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                password</label>
            <input type="password" id="password" wire:model='new_password'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter new password">
            @error('new_password')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 col-span-6 md:col-span-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm new
                password</label>
            <input type="password" id="password" wire:model='confirm_password'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Re-enter new password">
            @error('confirm_password')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change
        password</button>
</form>
