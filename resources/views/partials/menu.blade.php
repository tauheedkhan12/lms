<nav class="bg-blue-600 p-4 text-white flex justify-between">
    <div class="font-bold">Laravel LMS</div>
    <div class="space-x-4">
        <a href="{{ url('/') }}" class="hover:underline">Home</a>
        <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
        <a href="{{ route('logout') }}" class="hover:underline"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</nav>
