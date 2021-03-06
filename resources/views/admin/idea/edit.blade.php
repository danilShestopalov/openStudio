@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit a post:</h2>
        <form action="{{ route('idea.update', $idea->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {!! method_field('patch') !!}

            <div class="form-group">
                <label for="title">Title:</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$idea->title}}">
            </div>

            <div class="form-group">
                <label for="intro">Body:</label>
                <textarea class="form-control" type="text" name="body" id="body">{{$idea->body}}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
