@php
    // Bidang yang ditampilkan di "What I Do". Ikon ada di partials/icons.
    $services = [
        ['filter' => 'analysis', 'icon' => 'ds', 'dark' => false, 'chip' => 'Analyze', 'pre' => 'Data ', 'hl' => 'Science', 'name' => 'Data Science',
            'text' => 'Exploring datasets, discovering patterns, and extracting insights through data analysis and statistical thinking.'],
        ['filter' => 'ml', 'icon' => 'ml', 'dark' => true, 'chip' => 'Model', 'pre' => 'Machine ', 'hl' => 'Learning', 'name' => 'Machine Learning',
            'text' => 'Experimenting with predictive models, feature engineering, and machine learning approaches to solve practical problems.'],
        ['filter' => 'engineering', 'icon' => 'de', 'dark' => true, 'chip' => 'Pipeline', 'pre' => 'Data ', 'hl' => 'Engineering', 'name' => 'Data Engineering',
            'text' => 'Learning to build reliable data pipelines, transform raw data, and organize data for analytics and machine learning workflows.'],
        ['filter' => 'web', 'icon' => 'sw', 'dark' => false, 'chip' => 'Build', 'pre' => 'Software ', 'hl' => 'Development', 'name' => 'Software Development',
            'text' => 'Building practical digital solutions using programming fundamentals, web technologies, and structured problem-solving.'],
    ];
@endphp
@foreach ($services as $s)
    <article class="card{{ $s['dark'] ? ' dark' : '' }}" data-rv>
        <div class="svc-top">
            <div class="ic-box">@include('partials.icons.' . $s['icon'])</div>
            <span class="svc-chip">{{ $s['chip'] }}</span>
        </div>
        <h3>{{ $s['pre'] }}<span class="hl">{{ $s['hl'] }}</span></h3>
        <p>{{ $s['text'] }}</p>
        <a class="link" href="#projects" data-filter="{{ $s['filter'] }}" aria-label="Explore {{ $s['name'] }} projects">Explore @include('partials.arrow')</a>
    </article>
@endforeach
