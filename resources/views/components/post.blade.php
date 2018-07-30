<div class="blog-post">
    <a href="/posts/{{ $id }}">
        <h2 class="blog-post-title">
            {{ $title }}
        </h2>
    </a>
    <p class="blog-post-meta">
        {{ $date }} by
        <a href="#">{{ $author }}</a>
    </p>

    {{ $slot }}
</div>
