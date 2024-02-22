<nav>
    <div class="relative max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/"
            class="flex items-center text-stone-600 space-x-2 rtl:space-x-reverse text-2xl font-semibold h-8">
            <img src="{{ asset('images/robot-assistant.png') }}" alt="logo" class="h-20 mx-auto">
            Gigs
        </a>
        <button data-collapse-toggle="navbar-default" onclick="toggle()" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-stone-300 rounded-lg md:hidden hover:bg-stone-500 focus:outline-none focus:ring-2"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-transparent
                    md:flex-row md:space-x-8 rtl:space-x-reverse">
                <li class="block py-2 px-3 ml-auto">
                    <a href="/" class="flex text-stone-500 rounded hover:text-stone-300">Home</a>
                </li>
                <li class="block py-2 px-3 ml-auto">
                    <a href="#" class="flex text-stone-500 rounded hover:text-stone-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>&nbsp;Register</a>
                </li>
                <li class="block py-2 px-3 ml-auto">
                    <a href="#" class="flex text-stone-500 rounded hover:text-stone-300">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"></path>
                        </svg>
                        &nbsp;Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const menu = document.getElementById('navbar-default');
    const toggle = () => menu.classList.toggle("hidden");
</script>
