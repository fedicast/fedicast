<footer class="footer mt-auto py-4 border-top bg-white">
    <div class="container mt-auto">
        <div class="row mb-4">
            <div class="col">
                <nav class="nav flex-column">
                    <a class="nav-link font-weight-bold" href="{{ route('home') }}">{{ __('Home') }}</a>
                    @auth
                        <a class="nav-link" href="{{ route('user.overview') }}">{{ __('Dashboard') }}</a>
                    @else
                    <span class="nav-link">
                        <a  href="{{ route('login') }}">{{ __('Login') }}</a> /
                        <a  href="{{ route('register') }}">{{ __('Join Free') }}</a>
                    </span>
                    @endif
                    <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                    <a class="nav-link" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                </nav>
            </div>
            <div class="col">
                <nav class="nav flex-column">
                    <a class="nav-link font-weight-bold" href="{{ route('platform') }}">{{ __('Platform') }}</a>
                    <a class="nav-link" href="{{ route('platform.features') }}">{{ __('Features') }}</a>
                    <a class="nav-link" href="{{ route('platform.federation') }}">{{ __('Federation') }}</a>
                    <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                </nav>
            </div>
            <div class="col">
                <nav class="nav flex-column">
                    <a class="nav-link font-weight-bold" href="{{ route('support') }}">{{ __('Support') }}</a>
                    <a class="nav-link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>

                    <a class="nav-link" href="{{ route('documentation') }}">{{ __('Documentation') }}</a>
                    <a class="nav-link" href="{{ route('documentation.tutorials') }}">{{ __('Tutorials') }}</a>
                    <a class="nav-link" href="{{ route('documentation.faq') }}">{{ __('FAQ') }}</a>
                    <span class="nav-link">
                            <a  href="{{ route('documentation.api.mastodon') }}">{{ __('Mastodon API') }}</a> /
                            <a  href="{{ route('documentation.api.fedicast') }}">{{ __('Fedicast API') }}</a>
                        </span>
                    <a class="nav-link" href="{{ route('about.references') }}">{{ __('References') }}</a>
                </nav>
            </div>
            <div class="col">
                <nav class="nav flex-column">
                    <a class="nav-link" href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a>
                    <a class="nav-link" href="{{ route('legal.toc') }}">{{ __('Terms of Service') }}</a>
                    <a class="nav-link" href="{{ route('legal.coc') }}">{{ __('Code of Conduct') }}</a>
                    <a class="nav-link" href="{{ route('sitemap') }}">{{ __('Sitemap') }}</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-8">&copy; FediCast 2019</div>
            <div class="col-4 text-right">
                <a href="https://github.com/fedicast/fedicast/" style="font-size: 1.25rem;">
                    <i class="fab fa-github"></i>
                </a> FediCast is Licenced MIT
            </div>
        </div>
    </div>
</footer>
