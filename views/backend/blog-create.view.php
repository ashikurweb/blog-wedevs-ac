<?php require 'admin/partials/head.php' ?>
<!-- Sidebar -->
<?php require 'admin/partials/sidebar.php' ?>     

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Header -->
         <?php require 'admin/partials/header.php' ?>
        
        <!-- Blog Creation Form -->
        <section class="p-6">
            <header class="p-6 bg-white shadow-lg">
                <h1 class="text-3xl font-bold text-slate-800">Create New Blog</h1>
            </header>

            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-6">
                    <label for="title" class="block text-slate-700 font-medium mb-2">Blog Title</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter the blog title" required>
                </div>

                <div class="mb-6">
                    <label for="author" class="block text-slate-700 font-medium mb-2">Author</label>
                    <input type="text" id="author" name="author" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter the author name" required>
                </div>

                <div class="mb-6">
                    <label for="publish_date" class="block text-slate-700 font-medium mb-2">Publish Date</label>
                    <input type="date" id="publish_date" name="publish_date" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" required>
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-slate-700 font-medium mb-2">Content</label>
                    <textarea id="content" name="content" class="w-full h-64 px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Write your blog content here..."></textarea>
                </div>

                <div class="mb-6">
                    <label for="category" class="block text-slate-700 font-medium mb-2">Category</label>
                    <select id="category" name="category" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-400">
                        <option value="">Select Category</option>
                        <option value="vuejs">Vue.js</option>
                        <option value="javascript">JavaScript</option>
                        <option value="frontend">Frontend</option>
                        <option value="backend">Backend</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-500 transition">Publish Blog</button>
                </div>
            </form>
        </section>

    </main>
</div>

<!-- Initialize CKEditor -->
<?php require 'admin/partials/footer.php' ?>
