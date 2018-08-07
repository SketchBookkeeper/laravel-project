<div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-3">
        @foreach ($archives as $stats)
            <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    {{ $stats['month'] . ' ' . $stats['year'] }}
                </a>
            </li>
        @endforeach
    </ol>

    <h4 class="font-italic">Tags</h4>
    <ol class="list-unstyled">
        @foreach ($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag }}" class="badge badge-pill badge-primary">
                    {{ $tag }}
                </a>
            </li>
        @endforeach
    </ol>
</div>
