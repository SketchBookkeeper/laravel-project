<div class="blog-post">
    <h2 class="blog-post-title">{{ $title }}</h2>
    <p class="blog-post-meta">
        {{ $date }} by
        <a href="#">{{ $author }}</a>
    </p>

    {{ $slot }}
</div>
