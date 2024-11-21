<!-- resources/views/login_user.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 flex justify-between items-center text-white">
        <h1 class="font-bold text-lg">TernakMart</h1>
        <div class="space-x-4">
            <a href="{{ route('login-user') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-blue-600">Login User</a>
            <a href="{{ route('login-admin') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-blue-600">Login Admin</a>
        </div>
    </nav>

    <!-- Login Admin -->
    <div class="max-w-md mx-auto mt-10">
        <form method="POST" action="{{ route('login-admin') }}" class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-bold mb-4">Login Admin</h2>
            <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded mb-4" />
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded mb-4" />
            <button class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
        </form>
    </div>

    <!-- Footer (Optional) -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 TernakMart. All Rights Reserved.</p>
    </footer>
</body>
</html>