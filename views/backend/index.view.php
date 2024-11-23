<?php require '../admin/partials/head.php' ?>
<!-- Sidebar -->
<?php require '../admin/partials/sidebar.php' ?>    
    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header with Profile -->
        <?php require '../admin/partials/header.php' ?>

        <!-- Dashboard Content -->
        <section id="dashboard-section" class="p-6">
            <div class="space-y-2 p-4">
                <a href="/" class="mr-10">
                    <i class="ri-home-9-fill"></i>Home/
                </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-slate-800 mb-4">Welcome Back,<span class="text-green-500 "> <?= $_SESSION['user_name']; ?></span></h2>
                <p class="text-slate-600">This is your dashboard. From here, you can manage your blogs, users, and account settings.</p>
            </div>
        </section>

        <!-- Blog Management Section -->
        <section id="blogs-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Manage Blogs</h2>
            <div class="mb-6">
                <a href="/admin/blog-create" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-500 transition">Create New Blog</a>
            </div>
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg p-4">
                <table class="w-full border-collapse border border-slate-300">
                    <thead class="bg-slate-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4">Title</th>
                        <th class="text-left py-3 px-4">Author</th>
                        <th class="text-left py-3 px-4">Published</th>
                        <th class="text-left py-3 px-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4">How to Build Vue.js Applications</td>
                        <td class="py-3 px-4">John Doe</td>
                        <td class="py-3 px-4">15 Nov 2024</td>
                        <td class="py-3 px-4 flex space-x-4">
                            <a href="#" class="text-blue-600 hover:underline">
                            <i class="ri-edit-box-line"></i>
                            </a>
                            <a href="#" class="text-red-600 hover:underline">
                            <i class="ri-delete-bin-line"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- Repeat similar rows -->
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Users Management Section -->
        <section id="users-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Manage Users</h2>
            <p class="text-slate-600">User management functionality will go here.</p>
        </section>

        <!-- Settings Section -->
        <section id="settings-section" class="p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Settings</h2>
            <p class="text-slate-600">Settings functionality will go here.</p>
        </section>
    </main>
</div>

<!-- Script for Profile Dropdown -->
<?php require '../admin/partials/footer.php' ?>
