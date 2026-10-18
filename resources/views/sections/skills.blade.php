@foreach ($skillGroups as $group)
    <article class="sk{{ $group->style ? ' ' . $group->style : '' }}" data-rv>
        <div class="sk-head"><h3>{{ $group->name }}</h3></div>
        <ul class="chips">
            @foreach ($group->skills as $skill)
                <li class="chip{{ $skill->is_exploring ? ' exp' : '' }}">{{ $skill->name }}</li>
            @endforeach
        </ul>
    </article>
@endforeach
