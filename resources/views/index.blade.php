@extends('layouts.app')

@section('content')
<!-- 1. HERO -->
<section class="hero" id="hero" aria-labelledby="hero-title">
    <div class="wrap hero-grid">
        <div>
            <span class="eyebrow">Informatics Student · Aspiring Data Scientist</span>
            <h1 id="hero-title">Hello, I'm <br><span class="hl">Galang Dava</span></h1>
            <p class="lede"> I'm an Informatics student focused on Data
                Science, Data Analytics, and Machine Learning. I enjoy exploring data, building intelligent
                solutions, and turning complex problems into meaningful insights.</p>
            <div class="cta-row">
                <a class="btn btn-primary" href="#projects">Explore My Work <svg class="arr" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path d="M7 17 17 7M8 7h9v9" />
                    </svg></a>
                <a class="btn btn-ghost" href="#contact">Get in Touch</a>
            </div>
        </div>


        <div class="hero-art">
            <svg viewBox="0 0 520 520" role="img"
                aria-label="Abstract illustration: data points orbiting a small bar chart">

                <circle cx="260" cy="260" r="236" fill="none" stroke-width="1.5" class="s-ink" opacity=".22" />

                <g class="spin-r">
                    <circle cx="260" cy="260" r="236" fill="none" stroke-width="0" />
                    <circle cx="219" cy="28" r="7" class="f-lime s-ink" stroke-width="2" />
                    <circle cx="378" cy="464" r="6" class="f-ink" />
                    <circle cx="28" cy="301" r="6" class="f-white s-ink" stroke-width="2" />
                </g>

                <circle cx="260" cy="260" r="170" fill="none" stroke-width="1.5" stroke-dasharray="3 8" class="s-ink"
                    stroke-linecap="round" />

                <g class="spin">
                    <path d="M260 260 345 113M260 260 420 318M260 260 130 369M260 260 100 202" fill="none" class="s-ink"
                        stroke-width="1.2" opacity=".45" />

                    <path d="M345 113 420 318 130 369 100 202Z" fill="none" class="s-ink" stroke-width="1.2"
                        opacity=".25" />

                    <circle cx="345" cy="113" r="9" class="f-ink" />
                    <circle cx="420" cy="318" r="9" class="f-lime s-ink" stroke-width="2" />
                    <circle cx="130" cy="369" r="9" class="f-white s-ink" stroke-width="2" />
                    <circle cx="100" cy="202" r="9" class="f-ink" />
                </g>

                <circle cx="260" cy="260" r="100" class="f-lime s-ink" stroke-width="2.5" />
                <g class="fl" style="animation-delay:-1s">
                    <image x="45" y="0" width="450" height="450" href="{{ asset('images/me.png') }}"
                        preserveAspectRatio="xMidYMid meet" />
                </g>

                <g class="fl" style="animation-delay:-3s">
                    <rect x="338" y="132" width="116" height="36" rx="18" class="f-dark" />
                    <text x="396" y="155" text-anchor="middle" class="svg-mono t-white">model.fit()</text>
                </g>

                <g class="fl" style="animation-delay:-5s">
                    <rect x="34" y="388" width="108" height="36" rx="18" class="f-lime s-ink" stroke-width="2" />
                    <text x="88" y="411" text-anchor="middle" class="svg-mono t-ink">insight</text>
                </g>

                <g class="fl" style="animation-delay:-2s">
                    <rect x="270" y="408" width="100" height="34" rx="17" class="f-white s-ink" stroke-width="2" />
                    <text x="320" y="430" text-anchor="middle" class="svg-mono t-ink">df.head()</text>
                </g>

                <polygon points="82,118 114,118 98,90" fill="none" class="s-ink" stroke-width="2"
                    stroke-linejoin="round" />

                <path d="M446 66v18M437 75h18" class="s-ink" stroke-width="2.5" stroke-linecap="round" fill="none" />

                <rect x="440" y="372" width="16" height="16" rx="3" transform="rotate(20 448 380)" class="f-lime s-ink"
                    stroke-width="2" />

            </svg>
        </div>
    </div>
</section>

<!-- 2. SERVICES -->
<section class="sec" id="what-i-do" aria-labelledby="svc-title" style="padding-top:0">
    <div class="wrap">
        <div class="sec-head" data-rv>
            <span class="eyebrow">Focus areas</span>
            <h2 id="svc-title">What I <span class="hl">Do</span></h2>
            <p class="lede">Areas I'm exploring, learning, and building projects in.</p>
        </div>
        <div class="svc-grid" id="svc-grid">
            @include('sections.services')
        </div>
    </div>
</section>

<!-- 3. ABOUT -->
<section class="sec" id="about" aria-labelledby="about-title" style="padding-top:clamp(32px,5vw,56px)">
   <div class="wrap about-grid">
    <div class="about-copy" data-rv>
        <span class="eyebrow">About</span>
        <h2 id="about-title">A Little <span class="hl">About</span> Me</h2>

        <p class="lead">
            I'm an Informatics student passionate about programming,
            data science, and intelligent systems. I enjoy exploring
            how technology and data can turn complex problems into
            meaningful insights.
        </p>

        <p class="sub">
            Currently, I'm deepening my knowledge of machine learning
            and data engineering through continuous learning and
            hands-on projects.
        </p>

        <div class="hi-grid" id="hi-grid">
            @include('sections.highlights')
        </div>
        @if ($facts->isNotEmpty())
        <div class="facts" id="facts">
            <div class="facts-head"><span class="eyebrow">A bit more</span></div>
            <dl>
                @foreach ($facts as $fact)
                    <div><dt>{{ $fact->label }}</dt><dd>{{ $fact->value }}</dd></div>
                @endforeach
            </dl>
        </div>
        @endif
    </div>
        <div class="about-art" data-rv>
            <svg viewBox="0 0 480 480" role="img"
                aria-label="Abstract composition of a dotted dark panel, a lime circle and a small line chart card">
                <defs>
                    <pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="3" cy="3" r="1.5" fill="#FFFFFF" fill-opacity=".3" />
                    </pattern>
                </defs>
                <rect x="30" y="30" width="300" height="400" rx="40" class="f-dark" />
                <rect x="30" y="30" width="300" height="400" rx="40" fill="url(#dots)" />
                <circle cx="340" cy="140" r="100" fill="none" class="s-ink" stroke-width="1.5" stroke-dasharray="3 8"
                    stroke-linecap="round" />
                <circle cx="340" cy="140" r="72" class="f-lime s-ink" stroke-width="2.5" />
                <g class="fl" style="animation-delay:-2s">
                    <rect x="170" y="262" width="270" height="170" rx="28" class="f-white s-ink" stroke-width="2.5" />
                    <path d="M200 400H410M200 300H410M200 350H410" class="s-ink" stroke-width="1" opacity=".18"
                        fill="none" />
                    <path d="M204 388 252 352 290 366 336 316 378 326 406 292" fill="none" class="s-ink"
                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="204" cy="388" r="5" class="f-white s-ink" stroke-width="2" />
                    <circle cx="290" cy="366" r="5" class="f-white s-ink" stroke-width="2" />
                    <circle cx="336" cy="316" r="5" class="f-white s-ink" stroke-width="2" />
                    <circle cx="406" cy="292" r="7" class="f-lime s-ink" stroke-width="2.5" />
                </g>
                <g class="fl" style="animation-delay:-4s">
                    <rect x="58" y="62" width="150" height="34" rx="17" fill="none" stroke="#FFFFFF"
                        stroke-opacity=".55" stroke-width="1.5" />
                    <text x="133" y="84" text-anchor="middle" class="svg-mono t-white">learn → build</text>
                </g>
                <circle cx="86" cy="330" r="30" class="f-lime s-ink" stroke-width="2.5" />
                <circle cx="86" cy="330" r="46" fill="none" stroke="#FFFFFF" stroke-opacity=".4" stroke-width="1.5"
                    stroke-dasharray="3 7" stroke-linecap="round" />
                <path d="M60 240h70M60 258h44" stroke="#FFFFFF" stroke-opacity=".55" stroke-width="2"
                    stroke-linecap="round" fill="none" />
                <polygon points="404,60 436,60 420,32" fill="none" class="s-ink" stroke-width="2"
                    stroke-linejoin="round" transform="translate(-20 -10)" />
                <path d="M440 226v16M432 234h16" class="s-ink" stroke-width="2.5" stroke-linecap="round" fill="none"
                    transform="translate(-6 -6)" />
            </svg>
        </div>
    </div>
</section>

<!-- 4. EXPERIENCE -->
<section class="sec journey" id="experience" aria-labelledby="jr-title">
    <div class="wrap">
        <div class="sec-head" data-rv>
            <span class="eyebrow">Timeline</span>
            <h2 id="jr-title">My <span class="hl">Journey</span> So Far</h2>
            <p class="lede">Education, activities, and learning experiences.</p>
        </div>
        <div class="jr-grid">
            <div class="jr-col edu-col" data-rv>
                <h3>Education</h3>
                <div class="tl" id="edu-list">
                    @foreach ($education as $entry)
                        @include('sections.timeline-item')
                    @endforeach
                </div>
            </div>
            <div class="jr-col" data-rv>
                <h3>Experience &amp; Activities</h3>
                <div class="tl" id="exp-list">
                    @foreach ($experience as $entry)
                        @include('sections.timeline-item')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. SKILLS -->
<section class="sec" id="skills" aria-labelledby="sk-title">
    <div class="wrap">
        <div class="sec-head" data-rv>
            <span class="eyebrow">Skills</span>
            <h2 id="sk-title">Tools in My <span class="hl">Toolkit</span></h2>
            <p class="lede">Technologies and concepts I'm learning and working with.</p>
            <span class="legend"><i aria-hidden="true"></i> Highlighted chips are what I'm currently
                exploring</span>
        </div>
        <div class="sk-grid" id="sk-grid">
            @include('sections.skills')
        </div>
    </div>
</section>

<!-- 6. PROJECTS -->
<section class="sec" id="projects" aria-labelledby="pj-title" style="padding-top:0">
    <div class="wrap">
        <div class="sec-head" data-rv>
            <span class="eyebrow">Work</span>
            <h2 id="pj-title">Selected <span class="hl">Projects</span></h2>
            <p class="lede">A collection of experiments, academic work, and projects built through curiosity.
            </p>
        </div>
        @include('sections.projects')
    </div>
</section>

<!-- 7. CONTACT -->
<section class="sec contact" id="contact" aria-labelledby="ct-title">
    <div class="wrap">
        <div class="contact-box" data-rv>
            <div>
                <span class="eyebrow">Contact</span>
                <h2 id="ct-title">Have an <span class="hl">Idea?</span> Let's Connect.</h2>
                <p class="lede">I'm always open to discussing technology, sharing ideas, learning opportunities,
                    and interesting projects.</p>
                <div class="cta-row">
                    <a class="btn btn-primary" id="mail-cta"
                        href="mailto:{{ $profile->email }}?subject={{ rawurlencode('Hello from your portfolio') }}">Send Me an Email <svg class="arr"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M7 17 17 7M8 7h9v9" />
                        </svg></a>
                </div>
                <div class="mail-line">
                    <span class="mail-addr" id="mail-addr">{{ $profile->email }}</span>
                    <button class="copy" id="copy-btn" type="button">Copy address</button>
                    <span class="sr-only" id="copy-status" role="status" aria-live="polite"></span>
                </div>
                <p class="note" id="copy-note">The button opens your mail app. If nothing happens, copy the
                    address and write from your own email.</p>
            </div>
            <ul class="soc" id="soc">
                @foreach ($socials as $s)
                    <li><a href="{{ $s->url }}"@if ($s->isExternal()) target="_blank" rel="noopener noreferrer"@endif><span><small>{{ $s->label }}</small><strong>{{ $s->handle }}</strong></span>@include('partials.arrow')</a></li>
                @endforeach
            </ul>

            <form class="cform" id="contact-form" method="POST" action="{{ route('contact.store') }}" novalidate>
                @csrf
                <h3 class="cform-title">Or send a message here</h3>

                @if (session('contact_status'))
                    <p class="cform-alert" role="status" tabindex="-1" id="cform-status">{{ session('contact_status') }}</p>
                @elseif ($errors->any())
                    <p class="cform-alert err" role="alert" tabindex="-1" id="cform-status">Please fix the highlighted fields and send again.</p>
                @endif

                <div class="cform-row">
                    <div class="field">
                        <label for="cf-name">Name</label>
                        <input id="cf-name" name="name" type="text" value="{{ old('name') }}" maxlength="100"
                            autocomplete="name" required @error('name') aria-invalid="true" aria-describedby="cf-name-err" @enderror>
                        @error('name')<p class="field-err" id="cf-name-err">{{ $message }}</p>@enderror
                    </div>
                    <div class="field">
                        <label for="cf-email">Email</label>
                        <input id="cf-email" name="email" type="email" value="{{ old('email') }}" maxlength="150"
                            autocomplete="email" required @error('email') aria-invalid="true" aria-describedby="cf-email-err" @enderror>
                        @error('email')<p class="field-err" id="cf-email-err">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="field">
                    <label for="cf-message">Message</label>
                    <textarea id="cf-message" name="message" rows="5" maxlength="2000" required
                        @error('message') aria-invalid="true" aria-describedby="cf-message-err" @enderror>{{ old('message') }}</textarea>
                    @error('message')<p class="field-err" id="cf-message-err">{{ $message }}</p>@enderror
                </div>

                {{-- Honeypot anti-spam: disembunyikan dari manusia, bot sering mengisinya. --}}
                <div class="hp" aria-hidden="true">
                    <label for="cf-website">Leave this field empty</label>
                    <input id="cf-website" name="website" type="text" tabindex="-1" autocomplete="off">
                </div>

                <button class="btn btn-primary" type="submit" id="cform-submit">Send Message @include('partials.arrow')</button>
            </form>
        </div>
    </div>
</section>

@endsection
