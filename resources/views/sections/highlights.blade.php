@php
    $highlights = [
        ['Curious by Nature', 'Always asking how and why.', '<circle cx="11" cy="11" r="6"/><path d="m20 20-4.5-4.5"/>'],
        ['Learn by Building', 'Ideas become real through practice.', '<path d="M4 8.5 12 4l8 4.5v9L12 22l-8-4.5z"/><path d="M4 8.5 12 13l8-4.5M12 13v9"/>'],
        ['Data-Driven Thinking', 'Evidence first, then conclusions.', '<path d="M5 20V11M12 20V4M19 20v-6"/>'],
    ];
@endphp
@foreach ($highlights as [$title, $text, $icon])
    <div class="hi">
        <span class="hi-ic"><svg viewBox="0 0 24 24" aria-hidden="true">{!! $icon !!}</svg></span>
        <strong>{{ $title }}</strong>
        <span>{{ $text }}</span>
    </div>
@endforeach
