<header class="p-3 bg-dark text-white shadow mb-5">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class=" d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" class="bi me-2" width="50" height="32" alt="">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('app.index')}}" class="nav-link px-2 text-white">HOME</a></li>
                <li><a href="{{route('app.game.index')}}" class="nav-link px-2 text-white">CATALOG</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    <div class="text-end">
                        @if (Route::has('auth.login.index'))
                            <a href="{{route('auth.login.index')}}">
                                <button type="button" class="btn btn-outline-light me-2">Login</button>
                            </a>
                        @endif
                        @if (Route::has('auth.register.index'))
                            <a href="{{route('auth.register.index')}}">
                                <button type="button" class="btn btn-warning">Register</button>
                            </a>
                        @endif
                    </div>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @can('view', auth()->user())
                                <a class="dropdown-item" href="{{route('admin.index')}}">Admin</a>
                            @endcan
                            <a class="dropdown-item" href="{{ route('auth.logout.post') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('auth.logout.post') }}" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>
