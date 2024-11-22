<header class="bg-slate-800 text-white shadow-lg">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="text-3xl font-bold">Blogify</a>

        <!-- Hamburger Button (Mobile) -->
        <button id="menu-toggle" class="text-white md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Menu -->
        <nav id="menu" class="hidden md:flex space-x-6">
            <?php require 'views/partials/nav-link.php' ?>            
        </nav>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-slate-800">
        <ul class="flex flex-col space-y-4 p-4 text-white">
            <?php require 'views/partials/nav-link.php' ?>
        </ul>
    </nav>
</header>