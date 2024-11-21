<!-- resources/views/components/landing_page_navbar.blade.php -->
<nav class="bg-orange-500 p-4 flex justify-between items-center text-white">
    <h1 class="font-bold text-lg">TernakMart</h1>
    <div class="space-x-4">
        <a href="{{ route('login_user') }}" class="bg-white text-orange-500 px-4 py-2 rounded">Login User</a>
        <a href="{{ route('login_admin') }}" class="bg-white text-orange-500 px-4 py-2 rounded">Login Admin</a>
    </div>
</nav>
