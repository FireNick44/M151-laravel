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
                <button type="submit" class="btnLogout btn-primary">Ausloggen</button>
            </form>
        @endauth

        @guest
            <a href="{{ url('/login') }}">Einloggen</a>
            <a href="{{ url('/register') }}">Registrieren</a>
        @endguest

        @can('admin')
            <button onclick="location.href = '/events/create';" class="btn btn-primary">Event erstellen</button>
        @endcan

    </div>
</header>
