@extends ('layout')

@section ('content')
<h1>Create a Post</h1>

<hr>

<form method="POST" action="/posts" class="mb-3">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="post-title" name="title" >
        <small id="post-title" class="form-text text-muted">Please provide a title</small>
    </div>

    <div class="form-group">
        <label for="post-body">Body</label>
        <textarea class="form-control" name="body" id="body" cols="30" rows="10" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
</form>

@include('partials.errors')

@endsection
