<nav class="bg-white shadow mb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex space-x-4">
                <a href="{{ route('dashboard') }}" class="text-gray-900 font-bold">Dashboard</a>
                <a href="{{ route('users.index') }}" class="text-gray-700">Users</a>
            </div>
            <div class="flex items-center">
                <span class="text-gray-600">Hello, {{ Auth::user()->name }}</span>
            </div>
        </div>
    </div>
</nav>
