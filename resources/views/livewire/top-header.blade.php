<header class="px-2 md:px-12 py-2 md:py-4 sticky top-0 left-0 bg-white shadow">
    <nav class="flex gap-6 items-center">
        <a href="{{route('author.home')}}" class="uppercase font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 448 512">
                <path fill="currentColor" d="M446.6 222.7c-1.8-8-6.8-15.4-12.5-18.5c-1.8-1-13-2.2-25-2.7c-20.1-.9-22.3-1.3-28.7-5c-10.1-5.9-12.8-12.3-12.9-29.5c-.1-33-13.8-63.7-40.9-91.3c-19.3-19.7-40.9-33-65.5-40.5c-5.9-1.8-19.1-2.4-63.3-2.9c-69.4-.8-84.8.6-108.4 10C45.9 59.5 14.7 96.1 3.3 142.9C1.2 151.7.7 165.8.2 246.8c-.6 101.5.1 116.4 6.4 136.5c15.6 49.6 59.9 86.3 104.4 94.3c14.8 2.7 197.3 3.3 216 .8c32.5-4.4 58-17.5 81.9-41.9c17.3-17.7 28.1-36.8 35.2-62.1c4.9-17.6 4.5-142.8 2.5-151.7zm-322.1-63.6c7.8-7.9 10-8.2 58.8-8.2c43.9 0 45.4.1 51.8 3.4c9.3 4.7 13.4 11.3 13.4 21.9c0 9.5-3.8 16.2-12.3 21.6c-4.6 2.9-7.3 3.1-50.3 3.3c-26.5.2-47.7-.4-50.8-1.2c-16.6-4.7-22.8-28.5-10.6-40.8zm191.8 199.8l-14.9 2.4l-77.5.9c-68.1.8-87.3-.4-90.9-2c-7.1-3.1-13.8-11.7-14.9-19.4c-1.1-7.3 2.6-17.3 8.2-22.4c7.1-6.4 10.2-6.6 97.3-6.7c89.6-.1 89.1-.1 97.6 7.8c12.1 11.3 9.5 31.2-4.9 39.4z" />
            </svg></a>
        <ul class="flex gap-5 font-semibold">
            <li><a href="{{route('author.home')}}" class="hover:underline hover:underline-offset-2 active:underline">Menus & Categories</a></li>
            <li><a href="#" class="hover:underline hover:underline-offset-2 active:underline">Post</a></li>
            <li><a href="#" class="hover:underline hover:underline-offset-2 active:underline">Settings</a></li>
        </ul>

        <div class="ml-auto font-semibold relative ">
            <button id="profile" data-dropdown-toggle="logout" data-dropdown-placement="bottom-start" type="button">{{$author->name}}</button type="button">

            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="logout">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{$author->name}}</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{$author->email}}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{route('author.profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">profile</a>
                    </li>
                    <li>
                        <form action="{{route('author.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>