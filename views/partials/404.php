<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="text-center space-y-8">
        <!-- Video Section -->
        <div class="relative overflow-hidden w-full max-w-4xl mx-auto">
            <video autoplay muted loop class="w-full h-auto object-cover">
                <source src="assets/video/404.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Message -->
        <p class="text-2xl text-gray-900">Oops! The page you're looking for doesn't exist.</p>

        <!-- Go to Homepage Button -->
        <a href="/" class="inline-block hover:underline">
        &#8592;back to home
        </a>
    </div>
</body>
</html>