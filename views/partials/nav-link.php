<?php session_start(); ?>

<a href="/" class="<?php echo urlIs('/') ? 'bg-slate-700 text-white font-bold' : 'text-slate-300' ?> hover:underline text-slate-300 px-4 py-2 rounded-md">Home</a>
<a href="/list" class="<?php echo urlIs('/list') ? 'bg-slate-700 text-white font-bold' : 'text-slate-300' ?> hover:underline text-slate-300 px-4 py-2 rounded-md">List</a>
<a href="/details" class="<?php echo urlIs('/details') ? 'bg-slate-700 text-white font-bold' : 'text-slate-300' ?> hover:underline text-slate-300 px-4 py-2 rounded-md">Details</a>

<?php if (isset($_SESSION['user_id'])): ?>
    <!-- Profile Dropdown (User is logged in) -->
    <div class="relative">
        <button id="profile-menu-button" class="flex items-center space-x-3 focus:outline-none">
            <img src="https://avatars.githubusercontent.com/u/133311789?v=4" alt="Profile" class="w-10 h-10 rounded-full">
            <span class="hidden md:block text-slate-200 font-medium"><?php echo $_SESSION['user_name']; ?></span> <!-- Display the user's name -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.853l3.71-3.664a.75.75 0 111.04 1.082l-4.25 4.197a.75.75 0 01-1.042 0l-4.25-4.197a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
            </svg>
        </button>
        <!-- Dropdown Menu -->
        <div id="profile-menu" class="absolute right-0 mt-2 w-48 bg-slate-700 rounded-lg shadow-lg hidden">
            <a href="/profile" class="block px-4 py-2 text-slate-100 hover:bg-slate-600 rounded-lg">
                <i class="ri-profile-fill"></i> Profile
            </a>
            <a href="/admin" class="block px-4 py-2 text-slate-100 hover:bg-slate-600 rounded-lg">
                <i class="ri-home-9-line"></i> Dashboard
            </a>
        </div>
    </div>
<?php else: ?>
    <!-- Login Link (User is not logged in) -->
    <a href="/login" class="<?php echo urlIs('/login') ?> bg-sky-500 px-3 py-2 font-bold rounded-md hover:bg-sky-600 transition-all">
        <i class="ri-user-line"></i> My Account
    </a>
<?php endif; ?>
