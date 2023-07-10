@extends('layouts.layout')

@section('forums')
<main class="home">
  
<section class="py-5 text-center container">
    <!-- <div class="container"> -->
      <h1 >Forums</h1>  
        
        <!-- Create Forum Link -->
        <div class="mb-4">
            <a href="{{ route('forums.create') }}" class="btn btn-primary">Create New Forum</a>
        </div>
        <div class="container">
  <div class="row">
    @foreach ($forums as $forum)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100" id="forumCards">
          <!-- <img src="path/to/your-image.jpg" class="card-img-top" alt="Forum Image"> -->
          <div class="card-body">
            <h5 class="card-title">{{ $forum->title }}</h5>
            <p class="card-text">{{ $forum->description }}</p>
            <p class="card-text">Posted by: {{ $forum->user ? $forum->user->name : 'Unknown' }}</p>
            <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-primary">View Forum</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</section>
</main>
@endsection


