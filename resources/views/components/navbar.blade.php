<style>
    .navbar-brand {
        margin-right: 0;
    }

    .navbar-brand img {
        width: 80px;
    }

    @media screen and (min-width: 768px) {
        .navbar-brand img {
            width: 100px;
        }

        .navbar .container-fluid {
            flex-direction: column;
        }

        .navbar .navbar-nav .nav-item {
            padding: 0.5em 1em;
        }

        .navbar-nav {
            /* border-bottom: 2px solid #fff; */
        }
    }

    .navbar .navbar-nav .nav-link, a{
        color: #fff;
        font-size: 1.1em;
    }

    .navbar .navbar-nav {
        /* border-top: 2px solid #fff; */
        /* margin-top: 0.5em; */
    }
</style>
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#595B83">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}"
                            class="">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="">
                            Log in
                        </a>

                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}"
                                class="">
                                Register
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
