<!-- resources/views/landing_page.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page TernakMart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex flex-col min-h-screen" style="background-image: url('{{ asset('assets/background.jpg') }}'); background-size: cover; background-position: center;">
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 flex justify-between items-center text-white">
        <h1 class="font-bold text-lg">TernakMart</h1>
        <div class="space-x-4">
            <a href="{{ route('login-user') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-blue-600">Login User</a>
            <a href="{{ route('login-admin') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-blue-600">Login Admin</a>
        </div>
    </nav>

    <!-- Landing Page -->
    <div class="text-center py-10">
        <h1 class="text-4xl font-bold text-blue-800">Selamat Datang di TernakMart!</h1>

        <img src="{{ asset('assets/landing-image.png') }}" alt="TernakMart" class="mx-auto mt-8 max-w-full h-auto">

        <p class="text-blue-600 mt-4">Lokasi: Jalan Raya Nomor 123, Kota ABC</p>
        <p class="text-blue-600">Telepon: +62 812 3456 7890</p>
        <p class="text-blue-600 mt-4">Toko daging paling lengkap dan berkualitas di Indonesia.</p>
    </div>

    <!-- Footer (Optional) -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 TernakMart. All Rights Reserved.</p>
    </footer>
</body>
</html>
