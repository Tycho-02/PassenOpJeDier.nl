@if ($errors->any())
    <div>
        <div>
            <p>Whoops! Something went wrong.</p>
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <label for="name">Naam</label>
        <input id="name" type="text" name="name" required autofocus />
    </div>

    <!-- Geboortedatum -->
    <div>
        <label for="birthday">Geboortedatum</label>
        <input id="birthday" type="date" name="birthday" required />
    </div>

    <!-- Email Address -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required />
    </div>

    <!-- Password -->
    <div>
        <label for="password">Wachtwoord</label>
        <input id="password" type="password" name="password" required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation">Bevestig wachtwoord</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required />
    </div>

    <div>
        <a href="{{ route('login') }}">Login</a>
        <button>Registreer</button>
    </div>
</form>
