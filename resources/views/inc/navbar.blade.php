
<div class="container-fluid navbar-dark" style="background: #a04ea7; color: white;">
    <style>
        .btn-outline-mirror {
            border-color: #a04ea7;
            color: #3d1540;
        }
        .btn-outline-mirror:hover {
            background: #a287a5;
            color: #fde4ff;
        }

        .mirror-button {
            color: #a04ea7;
        }
        .mirror-button:hover {
            color: #3d1540;
        }

        .mirror-button-back-color {
            background: #a04ea7; 
            color: white;
        }
        .mirror-button-back-color-strong {
            background: #3d1540; 
            color: white;
        }
        .mirror-button-back-color-strong:hover {
            background: #a287a5;
            color: #fde4ff;
        }
        .mirror-modal-header {
            background: #a04ea7; 
            color: white; 
            height: 2px;
        }
        .mirror-alert {
            background: #b191b5;
            color: white;
        }
        .user_photo {
            border-radius: 50%;
            height: 21px;
            width: 18px;
            margin-right: 0.2rem;
        }
    </style>

    <header class="blog-header py-1">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="navbar-brand link-mirror text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'MirorLog') }}
                </a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo link-mirror nav-link text-white" href="#">POST</a>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">

                @auth

                    <li class="navbar-nav nav-item dropdown">
                        <a class="link-mirror text-white nav-link dropdown-toggle" href="#" id="UserNameDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/default_user picture icon.png') }}" alt="" class="user_photo">
                            {{ auth()->user()->name, 10 }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="UserNameDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>

                @endauth

                @guest
                    
                    <li class="navbar-nav nav-item dropdown">
                        <a class="link-mirror text-white nav-link dropdown-toggle" href="" id="LoginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="LoginDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </li>

                @endguest

            </div>
        </div>
    </header>

</div>

{{-- <div class="container">    

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav justify-content-between">
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">World</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">U.S.</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Technology</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Design</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Culture</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Business</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Politics</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Opinion</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Science</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Health</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Style</a>
            <a class="btn btn-sm btn-outline-mirror p-1" href="#">Travel</a>
        </nav>
    </div>

</div> --}}