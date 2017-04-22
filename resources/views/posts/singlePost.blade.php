@extends('layouts.master')

@section('content')
    <h2>{{$post->title}}</h2>
    <span><i>Created at {{$post->created_at}}</i></span>
    <p>{{$post->body}}</p>

@endsection