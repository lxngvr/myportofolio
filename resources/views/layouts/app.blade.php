<!doctype html>
<html>

<head>
    <meta charset=utf8>
    <meta name=viewport content="width=device-width,initial-scale=1,viewport-fit=cover">
    <title>@yield('title', 'Personal Portfolio')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    <a class="skip" href="#main">Skip to content</a>

    <header class="nav" id="top">
        <div class="wrap nav-in">
            <a class="brand" href="#top" data-top aria-label="Back to top">
                <span class="mono-logo" id="logo-mark" aria-hidden="true">GD</span>
                <span class="brand-name" id="brand-name">Galang Dava Ramadhan</span>
            </a>
            <nav class="nav-links" id="nav-links" aria-label="Primary"></nav>
            <div class="nav-actions">
                <a class="btn btn-ghost btn-sm" href="#contact">Let's Talk</a>
                <button class="burger" id="burger" type="button" aria-expanded="false" aria-controls="menu"
                    aria-label="Open menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div class="menu" id="menu" hidden>
            <div class="wrap">
                <ul id="menu-list"></ul>
            </div>
        </div>
    </header>

    <main id="main">
        @yield('content')

    </main>

    <footer class="footer">
        <div class="wrap foot-grid">
            <div>
                <div class="foot-brand"><span class="mono-logo" id="foot-mark" aria-hidden="true">YN</span><strong
                        id="foot-name">Galang Dava Ramadhan</strong></div>
                <p class="foot-tag">Curiosity-driven. Data-focused. Always learning.</p>
            </div>
            <div class="foot-bot">
                <span>© <span id="year"></span> <span id="foot-name-2">Your Name</span></span>
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
