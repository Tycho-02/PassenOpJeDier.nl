<h1>You are Blocked</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="route('logout')"><button>Logout</button></a>
</form>


