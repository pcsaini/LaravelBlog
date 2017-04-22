@extends('layouts.master')

@section('content')
    <h2>Post</h2>
    <span style="float: right"><a href="{{route('posts.create')}}" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"> Create Post</i></a></span>
    <table class="table table-striped">
        <tr>
            <th>
                Title
            </th>
            <th>
                &nbsp
            </th>
            <th>
                &nbsp
            </th>
            <th>
                &nbsp
            </th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>
                    {{$post->title}}
                </td>
                <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-eye-open"> View</i></a></td>
                <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"> Edit</i></a></td>
                <td>
                    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-sm btn-danger" type="submit"><i class="glyphicon glyphicon-trash"> Delete</i></button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection