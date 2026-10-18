@php
    $nav = [
        'About' => '#about',
        'Experience' => '#experience',
        'Skills' => '#skills',
        'Projects' => '#projects',
        'Contact' => '#contact',
    ];
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <title>@yield('title', $profile->name . ' | Portfolio')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    <a class="skip" href="#main">Skip to content</a>

    <header class="nav" id="top">
        <div class="wrap nav-in">
            <a class="brand" href="#top" data-top aria-label="Back to top">
                <span class="mono-logo" aria-hidden="true">{{ $profile->monogram }}</span>
                <span class="brand-name">{{ $profile->name }}</span>
            </a>
            <nav class="nav-links" id="nav-links" aria-label="Primary">
                @foreach ($nav as $label => $href)
                    <a href="{{ $href }}">{{ $label }}</a>
                @endforeach
            </nav>
            <div class="nav-actions">
                <a class="btn btn-ghost btn-sm" href="#contact">Let's Talk</a>
                <button class="burger" id="burger" type="button" aria-expanded="false" aria-controls="menu"
                    aria-label="Open menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div class="menu" id="menu" hidden>
            <div class="wrap">
                <ul id="menu-list">
                    @foreach ($nav as $label => $href)
                        <li><a href="{{ $href }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="wrap foot-grid">
            <div>
                <div class="foot-brand"><span class="mono-logo" aria-hidden="true">{{ $profile->monogram }}</span><strong>{{ $profile->name }}</strong></div>
                <p class="foot-tag">Curiosity-driven. Data-focused. Always learning.</p>
            </div>
            <div class="foot-bot">
                <span>&copy; {{ date('Y') }} {{ $profile->name }}</span>
                <a class="to-top" href="#top" data-top>Back to Top <svg class="arr" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path d="M7 17 17 7M8 7h9v9" />
                    </svg></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>

</html>
