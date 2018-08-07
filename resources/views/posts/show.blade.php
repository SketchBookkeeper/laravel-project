@extends ('layout')

@section ('content')
    <h1>{{ $post->title }}</h1>

    <div class="mb-5">
        @if (count($post->tags))
            @foreach ($post->tags as $tag)
                <a href="/posts/tags/{{ $tag->name }}" class="badge badge-pill badge-primary">
                    {{ $tag->name }}
                </a>
            @endforeach
        @endif
    </div>

    {{ $post->body }}

    <hr>

    <div class="comments mb-3">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <article>
                        <strong>
                            {{ $comment->created_at->diffForHumans() }} :
                        </strong>

                        {{ $comment->body }}
                    </article>
                </li>
            @endforeach
        </ul>
    </div>

    @if (auth()->check())
        <div class="card mb-3">
            <div class="card-body">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your Comment here" ></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    @include ('partials.errors')

@endsection
