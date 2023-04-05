<nav class="nav">
    <section class="nav__wrapper">
        @auth
        <a href="/profielen" class="nav__pagina"><button class="nav__button">Profielen</button></a>
        <a href="/account" class="nav__pagina"><button class="nav__button">Mijn aanvragen</button></a>
        <a href="/reviews" class="nav__pagina"><button class="nav__button">Mijn reviews</button></a>
        <form method="POST" action="{{ route('logout') }}" class="nav__pagina nav__form">
            @csrf
            
            <x-dropdown-link
            class="nav__button nav__button--logout"
            :href="route('logout')"
            onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Uitloggen') }}
            </x-dropdown-link>
        </form>
        @endauth
        
        @if(!Auth::check())
        <a href="/login" class="nav__pagina"><button class="nav__button">Inloggen</button></a>
        @endif
        
        @auth
        <a href="/huisdieren/create" class="nav__pagina nav__pagina--create"><button class="nav__button nav__button--create">Huisdier +</button></a>
        @endauth
    </section>
</nav>