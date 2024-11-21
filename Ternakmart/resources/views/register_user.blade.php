<!-- resources/views/register_user.blade.php -->
<div class="max-w-md mx-auto mt-10">
    <form method="POST" action="{{ route('register_user') }}" class="bg-white p-6 rounded shadow">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Register User</h2>
        <input type="text" name="nama" placeholder="Nama" class="w-full p-2 border rounded mb-4" />
        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-4" />
        <input type="text" name="nomer_telepon" placeholder="Nomor Telepon" class="w-full p-2 border rounded mb-4" />
        <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded mb-4" />
        <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded mb-4" />
        <button class="w-full bg-orange-500 text-white p-2 rounded">Register</button>
    </form>
</div>
