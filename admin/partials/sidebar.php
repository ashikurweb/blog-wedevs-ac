<aside class="w-64 bg-slate-800 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-2xl tracking-wide border-b border-slate-700">
            Admin Panel
        </div>
        <nav class="flex-grow">
            <ul class="space-y-2 p-4">
                <li><a href="/admin" class="<?php echo urlIs('/admin') ? 'bg-slate-900 font-bold text-white' : 'text-gray-300' ?> block px-4 py-2 rounded-md hover:bg-slate-700">
                        <i class="ri-home-office-fill"></i> Dashboard
                </a></li>
                <li><a href="/admin/blog-create" class="<?php echo urlIs('/admin/blog-create') ? 'bg-slate-900 font-bold text-white' : 'text-gray-300' ?> block px-4 py-2 rounded-md hover:bg-slate-700">
                        <i class="ri-id-card-line"></i> Blogs Create
                    </a>
                </li>
                <li><a href="/admin/user-profile" class="<?php echo urlIs('/admin/user-profile') ? 'bg-slate-900 font-bold text-white' : 'text-gray-300' ?> block px-4 py-2 rounded-md hover:bg-slate-700">
                        <i class="ri-user-line"></i> Manage Users
                    </a>
                </li>
                <li><a href="/admin/settings" class="<?php echo urlIs('/admin/settings') ? 'bg-slate-900 font-bold text-white' : 'text-gray-300' ?> block px-4 py-2 rounded-md hover:bg-slate-700">
                        <i class="ri-settings-2-line"></i> Settings
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4">
            <a href="/logout" class="block px-4 py-2 text-center rounded-md bg-red-600 hover:bg-red-500">Logout</a>
        </div>
    </aside>
