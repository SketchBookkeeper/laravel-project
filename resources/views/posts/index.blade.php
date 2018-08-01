@extends ('layout')

@section ('content')
    @foreach($posts as $post)
        @component('components.post')
            @slot('id')
                {{ $post->id }}
            @endslot

            @slot('date')
                {{ $post->created_at->toFormattedDateString() }}
            @endslot

            @slot('author')
                {{ $post->user->name }}
            @endslot

            @slot('title')
                {{ $post->title }}
            @endslot

            {{ $post->body }}
        @endcomponent
    @endforeach
@endsection
