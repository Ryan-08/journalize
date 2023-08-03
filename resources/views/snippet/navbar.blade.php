@if($context['page'] == 'Home')
<!-- nav -->
<div class="navbar">
    @auth
    <button class="btn-login" data-link="{{ route('logout') }}">Logout</button>
    @else
    <button class="btn-login" data-link="{{ route('login') }}">Login</button>
    @endauth
</div>
@else
<!-- nav -->
<div class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="navlink {{ request()->is('Home') ? 'active' : ''}}">
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            @guest
            <li class="navlink {{ request()->is('profile**') ? 'active' : ''}}">
                <a href="{{ route('profile') }}">
                    profile
                </a>
            </li>
            <li class="navlink {{ request()->is('research**') ? 'active' : ''}}">
                <a href="{{ route('research') }}">
                    research
                </a>
            </li>
            <li class="navlink {{ request()->is('project**')  ? 'active' : ''}}">
                <a href="{{ route('project') }}">
                    project
                </a>
            </li>
            <li class="navlink {{ request()->is('activities**')  ? 'active' : ''}}">
                <a href="{{ route('activities') }}">
                    activities
                </a>
            </li>
            @endguest
            @auth
            <li class="navlink {{ request()->is('auth/profile**')  ? 'active' : ''}}">
                <a href="{{ route('auth.profile') }}">
                    profile
                </a>
            </li>
            <li class="navlink {{  request()->is('auth/research**') ? 'active' : ''}}">
                <a href="{{ route('auth.research') }}">
                    research
                </a>
            </li>
            <li class="navlink {{  request()->is('auth/project**') ? 'active' : ''}}">
                <a href="{{ route('auth.project') }}">
                    project
                </a>
            </li>
            <li class="navlink {{ request()->is('auth/activities**') ? 'active' : ''}}">
                <a href="{{ route('auth.activities') }}">
                    activities
                </a>
            </li>
            @endauth
        </ul>
        @auth
        <button class="btn-login" data-link="{{ route('logout') }}">Logout</button>
        @else
        @if (request()->is('login'))
        <button class="btn-login" data-link="{{ route('register') }}">Register</button>
        @else
        <button class="btn-login" data-link="{{ route('login') }}">Login</button>

        @endif
        @endauth
    </div>
</div>
@endif
