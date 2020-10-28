<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="dropdown-item dropdown-toggle active" href="index.html">
                                               Acceuil 
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="elements.html">
                                               Services 
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                               A Propos 
                                            </a>
                                        </li>
                                        @if(Auth::check())
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                Mon Compte 
                                                </a>
                                                <ul class="dropdown-menu">
                                                <li><a href="{{ route('login')}}" class="dropdown-item">Login</a></li>
                                                    <li><a href="{{ route('profile.show') }}" class="dropdown-item">Profil</a></li>
                                                    <li><a class="dropdown-item">Message</a></li>
                                                    <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                    
                                                                <a href="{{ route('logout') }}" class="dropdown-item"
                                                                                    onclick="event.preventDefault();
                                                                                                this.closest('form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>
                                                            </form> 
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('register')}}" class="dropdown-item">Enregister un compte</a>
                                            </li>
                                        @endif   
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>