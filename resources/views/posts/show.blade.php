@extends('layouts.epp')
@section('title')show @endsection
@section('content')

    <div class="card">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
          <h5 class="card-title">Title : {{$post->title}}</h5>
          <p class="card-text">Description : {{$post->description}}</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Post Creator info</h5>
        <div class="card-body">
          <h5 class="card-title">Name: Ahmed</h5>
          <p class="card-text">Email.ahmed@gmail.com</p>
          <p class="card-text">Created At: Thuresday 15th of December 1975 02:15:16 PM</p>

        </div>
@endsection