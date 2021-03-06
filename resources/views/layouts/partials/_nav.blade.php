<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
                                                    {{-- ici on peut mettre env('APP_NAME') aulieu de config('app.name') --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ setActiveRoot('root_path') }}">
                    <a class="nav-link" href="{{ route('root_path') }}">Home {!! getCurrentForSrOnly('root_path') !!}</a>
                </li>
                <li class="nav-item {{ setActiveRoot('about_path') }}">
                    <a class="nav-link" href="{{ route('about_path') }}">About {!! getCurrentForSrOnly('about_path') !!}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Planet<span
                            class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="themes">
                        <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                        <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                        <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                        <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                        <a class="dropdown-item" href="https://larachat.co">Laratchat</a>
                    </div>
                </li>
                <li class="nav-item {{ setActiveRoot('contact_path') }}">
                    <a class="nav-link" href="{{ route('contact_path') }}">Contact {!! getCurrentForSrOnly('contact_path') !!}</a>
                </li>
            </ul>

            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>

        </div>
    </div>
</nav>


<nav class="second-nav-bar navbar navbar-expand-lg ">
    <div class="container">
        <ul class="navbar-nav my-2 my-lg-0">
           <form class="form-inline">
               <input class="form-control mr-sm-2" type="text" placeholder="Search">
               <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
           </form>
	    </ul>
	</div>
</nav>

