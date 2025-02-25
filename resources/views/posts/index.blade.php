@extends('layouts.epp')
@section('title')Index @endsection
@section('content')
    
    <div class="mt-4">
    <div class="text-center">
      <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
    </div>
      <table class="table mt-4 m-auto w-75"> 
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)
          
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->user ? $post->user->name : 'not found'}}</td> {{-- @if, show the posted by --}} 
            <td>{{$post->created_at}}</td>
            <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">View</a>
              <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
              
              <form style="display: inline" method="POST" action="{{route('posts.destory',$post->id)}}">
              @csrf
              @method('DELETE')
                <button class="btn btn-danger">Delete</button>

              </form>
            </td>
          </tr>

              
          @endforeach

          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>

@endsection
