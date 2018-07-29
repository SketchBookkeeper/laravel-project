@extends ('layout')

@section ('content')
    @component('components.post')
        @slot('date')
            December 13, 2012
        @endslot

        @slot('author')
            Chris
        @endslot

        @slot('title')
            Post
        @endslot

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque vel aut fuga. Itaque eos fugit exercitationem maxime labore consequuntur commodi et blanditiis facilis earum sunt, illum magnam adipisci maiores quam.
    @endcomponent
@endsection
