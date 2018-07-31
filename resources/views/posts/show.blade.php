@extends ('layout')

@section ('content')
    <?php //dd($post); ?>
    <h1>{{ $post->title }}</h1>

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

    @include ('partials.errors')

@endsection
