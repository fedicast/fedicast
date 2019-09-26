<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('user.overview') }}">
            {{ __('Dashboard') }}
        </a>
        <a class="dropdown-item" href="{{ route('admin.overview') }}">
            {{ __('Admin') }}
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('user.app', ['vue' => 'account']) }}">
            {{ __('Account Settings') }}
        </a>
        <a class="dropdown-item" href="#">
            {{ __('New Podcast') }}
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
