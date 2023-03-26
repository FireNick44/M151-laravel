<header>
    <a href="{{ url('/') }}">
        <div class="headerIMG">
            <img src="{{ asset('svg/logo.svg') }}">
            <h2>Event App</h2>
        </div>
    </a>
    <div class="headerLinks">
        @auth
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Ausloggen</button>
            </form>
        @else
            <a href="{{ url('/login') }}">Einloggen</a>
            <a href="{{ url('/register') }}">Registrieren</a>
        @endauth
    </div>
</header>
