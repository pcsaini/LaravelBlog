@extends('layouts.master')

@section('content')
    <h2>Create Post</h2>

    <form method="post" action="{{route('posts.update',$post->id)}}">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" placeholder="Body" name="body">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
