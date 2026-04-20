<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
    @vite('resources/js/nav_dropdown.js')
</head>

<body>
    <div class=" min-h-max h-screen w-screen bg-gray-900 min-w-[260px]">

        <nav class="bg-gray-800 dark:bg-gray-800/50 select-none">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="flex h-16 items-center justify-between">
                    <div class="shrink-0">
                        <a href="/">
                            <img src="{{ asset('R-removebg.png') }}" alt="LOGO"
                                class="size-10 cursor-pointer active:scale-90 transition duration-150 ease-in-out" />
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="flex gap-10 font-bold text-white w-full">
                            <div class="relative w-full group">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            </div>
                            <div class="relative w-full group">
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                            </div>
                            <div class="relative w-full group">
                                <x-nav-link href="/contact" :active="request()->is('contact')" >Contact</x-nav-link>
                            </div>
                            <div class="relative w-full group">
                                <a href="#"
                                    class=" {{ request()->is('#') ? 'text-gray-400' : 'text-white' }} transition-all duration-300 ease-out text-nowrap">Login</a>
                                <span
                                    class="{{ request()->is('#') ? 'w-[120%]' : 'w-0' }} absolute left-1/2 -translate-x-1/2 bottom-0 h-[2px] w-0 bg-gray-400 transition-all duration-300 ease-out group-hover:w-[120%]">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden ">
                        <button type="button" id="menu-btn"
                            class="relative size-10 flex flex-col justify-center items-center group gap-[6px] hover:bg-gray-700 pointer-events-auto cursor-pointer rounded-lg">
                            <span
                                class="block w-5 h-0.5 bg-white transition-all duration-300 group-[.open]:rotate-45 group-[.open]:translate-y-2"></span>
                            <span
                                class="block w-5 h-0.5 bg-white transition-all duration-300 group-[.open]:opacity-0"></span>
                            <span
                                class="block w-5 h-0.5 bg-white transition-all duration-300 group-[.open]:-rotate-45 group-[.open]:-translate-y-2"></span>
                        </button>
                    </div>

                </div>
            </div>
            <div id="menu"
                class=" overflow-hidden h-0 opacity-100 transition-all duration-500 ease-in-out md:hidden px-2 sm:px-3 border-t-2 border-gray-700 absolute left-0 right-0 z-10 bg-gray-800">
                <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <a href="/"
                    class="{{ request()->is('/') ? 'bg-gray-950/50 text-gray-300' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}  block rounded-md px-3 py-2 text-base font-medium">Home</a>
                <a href="/jobs"
                    class="{{ request()->is('jobs') ? 'bg-gray-950/50' : 'text-gray-400 hover:bg-white/5 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Jobs</a>
                <a href="/contact"
                    class="{{ request()->is('contact') ? 'bg-gray-950/50' : 'text-gray-400 hover:bg-white/5 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Contact</a>
                <a href="#"
                    class="{{ request()->is('#') ? 'bg-gray-950/50' : 'text-gray-400 hover:bg-white/5 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Login</a>
            </div>
        </nav>
        <header class=" bg-gray-600 shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-200">{{ $heading }}</h1>
            </div>
        </header>
        <main class="w-full h-max">
            <div class="mx-auto max-w-7xl py-6 lg:px-8 text-gray-200">
                {{ $slot }}
            </div>
        </main>
    </div>


</body>

</html>
