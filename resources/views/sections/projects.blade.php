@if ($projects->isEmpty())
    <p class="lede">Projects will appear here soon.</p>
@else
    @php
        $presentTypes = $projectTypes ? array_intersect_key($projectTypes, $projects->pluck('type', 'type')->all()) : [];
    @endphp
    <div class="filters" id="filters" role="group" aria-label="Filter projects by type">
        <button type="button" class="fbtn" data-f="all" aria-pressed="true">All</button>
        @foreach ($presentTypes as $key => $label)
            <button type="button" class="fbtn" data-f="{{ $key }}" aria-pressed="false">{{ $label }}</button>
        @endforeach
    </div>
    <p class="count" id="pj-count" aria-live="polite">Showing {{ $projects->count() }} {{ \Illuminate\Support\Str::plural('project', $projects->count()) }}</p>
    <div class="proj-grid" id="proj-grid">
        @foreach ($projects as $p)
            <article class="proj{{ $p->is_dark ? ' dark' : '' }}" data-rv data-type="{{ $p->type }}">
                <div class="thumb">@include('partials.thumbs.' . $p->thumb)</div>
                <div class="proj-body">
                    <div class="proj-top"><span class="kind" style="color:inherit;opacity:.75">{{ $p->typeLabel() }}</span></div>
                    <h3>{{ $p->title }}</h3>
                    <p>{{ $p->description }}</p>
                    <div class="role"><b>My contribution</b>{{ $p->contribution }}</div>
                    @if (!empty($p->tags))
                        <div class="tags">
                            @foreach ($p->tags as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                    <div class="proj-links">
                        <a class="btn btn-primary" href="{{ $p->url }}" target="_blank" rel="noopener noreferrer">View Project @include('partials.arrow')</a>
                        @if ($p->repo_url && $p->repo_url !== $p->url)
                            <a class="link" href="{{ $p->repo_url }}" target="_blank" rel="noopener noreferrer">GitHub @include('partials.arrow')</a>
                        @endif
                        @if ($p->demo_url && $p->demo_url !== $p->url)
                            <a class="link" href="{{ $p->demo_url }}" target="_blank" rel="noopener noreferrer">Live demo @include('partials.arrow')</a>
                        @endif
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endif
