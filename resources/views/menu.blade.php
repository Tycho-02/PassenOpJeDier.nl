
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')"><button>Logout</button></a>
            </form>
