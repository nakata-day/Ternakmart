<!-- resources/views/login_user.blade.php -->
<div class="max-w-md mx-auto mt-10">
    <form method="POST" action="{{ route('login_user') }}" class="bg-white p-6 rounded shadow">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Login User</h2>
        <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded mb-4" />
        <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded mb-4" />
        <button class="w-full bg-orange-500 text-white p-2 rounded">Login</button>
        <p class="text-center text-gray-500 mt-4">
            Belum punya akun? <a href="{{ route('register_user') }}" class="text-orange-500">Daftar di sini</a>.
        </p>
    </form>
</div>
