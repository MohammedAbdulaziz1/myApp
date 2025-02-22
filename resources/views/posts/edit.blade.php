@extends('layouts.epp')
@section('title') Edit @endsection
@section('content')

<form method="POST" action="{{route('posts.update',$posst->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" value="{{$posst->title}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"  rows="3">{{$posst->description}}</textarea>
    </div>

    <div class="mb-3">
        <label  class="form-label">Post Creator</label>
        <select name="post_creator" class="form-control">
            @foreach($ussers as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection