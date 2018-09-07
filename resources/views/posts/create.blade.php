

@extends('layouts.master')

@section('content')
    <h1>create a post</h1>
    <form method="post" action="/posts">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea id="'body" name="body" class="form-control">

            </textarea>
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>


@endsection