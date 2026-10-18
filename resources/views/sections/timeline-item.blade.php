<article class="tl-item">
    <div class="tl-meta"><span class="kind">{{ $entry->kind }}</span></div>
    <span class="tl-date">{{ $entry->period }}</span>
    <h4>{{ $entry->title }}</h4>
    <div class="tl-org">{{ $entry->organization }}</div>
    @if ($entry->description)
        <p>{{ $entry->description }}</p>
    @endif
    @if (!empty($entry->tags))
        <div class="tags">
            @foreach ($entry->tags as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>
    @endif
</article>
