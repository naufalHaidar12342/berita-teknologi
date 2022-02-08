<nav class="bg-purple-600 dark:bg-gray-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between">

            <div class="flex space-x-4">

                <!-- logo tech news -->
                <div class="flex items-center">
                    <img src="/images/tchn-logo.png" alt="Tech News logo" class="h-10 w-full">
                </div>

                <!-- primary navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="" class="py-5 px-3 text-white hover:bg-purple-400 dark:hover:bg-slate-600 hover:rounded hover:py-3">Postingan</a>
                    <a href="" class="py-5 px-3 text-white hover:bg-purple-400 dark:hover:bg-slate-600 hover:rounded hover:py-3">Atur Postingan</a>
                </div>
            </div>

            <!-- secondary navigation -->
            <div class="hidden md:flex items-center space-x-1 ">
                <a href="" class=" py-4 px-3 focus:outline-none focus:ring-2  focus:ring-white rounded">
                    <img src="/images/-100kb 256x256.JPG.webp" alt="" class="h-6 w-6 rounded-full inline-block">
                    Naufal
                </a>

                <a href="#" class="py-4 px-3  text-white hover:bg-red-700 hover:rounded hover:py-3">
                    Log Out
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </a>

            </div>
            <!-- mobile menu icon/ hamburger menu -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="hidden md:hidden mobile-menu ">
        <a href="" class="block py-3 px-4 text-sm text-white hover:bg-gray-300">lorem</a>
        <a href="" class="block py-3 px-4 text-sm text-white hover:bg-gray-300">lorem</a>
    </div>
</nav>


<!-- mobile menu dari samping/sidebar -->

<div class="relative min-h-screen md:flex">
    <!-- sidebar button -->
    <div class="bg-purple-500 dark:bg-gray-500 text-blue-400 flex justify-between md:hidden">
        <a href="" class="block p-4 text-white font-bold">Dashboard Admin</a>
        <button class="mobile-sidebar-button p-4 focus:outline-none focus:bg-purple-700 focus:dark:bg-gray-800 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
        </button>
    </div>

    <!-- sidebar dan isinya -->
    <div class="sidebar bg-purple-600 dark:bg-gray-700 w-64 text-slate-200 text-2xl space-y-7 px-2 py-5 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition ease-in-out duration-200">
        <a href="" class="flex items-center space-x-2 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <span class="text-2xl font-mono font-bold">Dashboard</span>
        </a>
        <nav>

            <a href="" class="block py-2.5 px-4 text-white rounded hover:bg-gray-800 transition ease-linear duration-300 ">lorem</a>
            <a href="" class="block py-2.5 px-4 text-white rounded hover:bg-gray-800 transition ease-linear duration-300 ">lorem</a>
            <a href="" class="block py-2.5 px-4 text-white rounded hover:bg-gray-800 transition ease-linear duration-300 ">lorem
            </a>
            <a href="" class="block py-2.5 px-4 text-white rounded hover:bg-gray-800 transition ease-linear duration-300 ">lorem</a>
        </nav>
    </div>

    <div class="container m-auto flex justify-center items-center">
        content
        <h2 class="text-xl ">Coba tailwindcss di codeigniter4</h2>
    </div>
</div>