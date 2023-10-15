@extends('layouts.layout')

@section('forums')
<main class="home">
<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: rgba(252,223,135,255);">
    <div class="col-lg-9 col-md-8 mx-auto" >
<h1 class="fw-light" style="font-family: 'Gagalin', sans-serif;">We are working on this page, so stay tuned!</h1>
</div>
</div>
</section>

<!-- <section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: rgba(252,223,135,255);">
    <div class="col-lg-9 col-md-8 mx-auto" >
    <h1 class="fw-light" style="font-family: 'Gagalin', sans-serif;">Meow Forum</h1>
      <p class="lead my-3" style="color: #2C3333;">Here you can find informative articles or experiences/tips from people with feline and learn from it. You can share and answer question too.
    Feel free to express yourself as a cat person in this page.</p>
    <div class="mb-4">
            <a href="{{ route('forums.create') }}" class="btn btn-primary">Create New Forum</a>
        </div>
</div>
</div>
</section>

        <div class="container">
  <div class="row">
    @foreach ($forums as $forum)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100" id="forumCards">
          <div class="card-body">
            <h5 class="card-title">{{ $forum->title }}</h5>

            <p class="card-text">Posted by: {{ $forum->user ? $forum->user->name : 'Unknown' }}</p>
            <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-primary">View Forum</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</section> -->
</main>
@endsection


