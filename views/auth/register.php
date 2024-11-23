<?php  
$title = 'Registration page';
require 'views/partials/head.php';
require 'controllers/auth/insert.php';

?>


<div class="bg-slate-50 font-sans min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 text-center">Create Your Account</h1>
        <form action="/register" method="POST">
            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-slate-700 font-medium mb-2">Full Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border <?= !empty($errors['name']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your full name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                <?php if (!empty($errors['name'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['name'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-slate-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border <?= !empty($errors['email']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-slate-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border <?= !empty($errors['password']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Create a password">
                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-slate-700 font-medium mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border <?= !empty($errors['password_confirmation']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Confirm your password">
                <?php if (!empty($errors['password_confirmation'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['password_confirmation'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-4 py-2 bg-slate-800 text-white font-bold rounded-lg hover:bg-slate-700 transition">
                Register
            </button>
        </form>
        <p class="text-center text-slate-600 mt-4">Already have an account? 
            <a href="/login" class="text-slate-800 font-bold hover:underline">Login</a>
        </p>
    </div>
</div>

</body>

</html>
