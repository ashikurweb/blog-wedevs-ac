<?php 
$title = 'Login page';
require 'views/partials/head.php';
require 'controllers/auth/login_logic.php';
?>

<div class="bg-slate-50 font-sans min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold text-slate-800 mb-6 text-center">Welcome back</h1>
        <form action="/login" method="POST">
            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-slate-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border <?= !empty($errors['email']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>
            
            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-slate-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border <?= !empty($errors['password']) ? 'border-red-500' : 'border-slate-300' ?> rounded-lg focus:outline-none focus:ring focus:ring-slate-400" placeholder="Enter your password">
                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Remember Me and Forgot Password -->
            <div class="flex items-center justify-between mb-6">
                <label class="inline-flex items-center text-slate-600">
                    <input type="checkbox" class="form-checkbox text-slate-600 focus:ring focus:ring-slate-400 rounded">
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-slate-600 hover:underline text-sm">Forgot Password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-4 py-2 bg-slate-800 text-white font-bold rounded-lg hover:bg-slate-700 transition">Login</button>
        </form>
        
        <!-- Sign Up Link -->
        <p class="text-center text-slate-600 mt-4">Don't have an account? 
            <a href="/register" class="text-slate-800 font-bold hover:underline">Sign Up</a>
        </p>
    </div>
</div>

</body>
</html>
