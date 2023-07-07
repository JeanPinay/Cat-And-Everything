@extends('layouts.layout')

@section('forumForm')
<main class="home">
<section class="py-5 text-center container">
<h1 class="h1Forum">Ask or share something </h1>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="{{ route('forums.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Forum</button>
      </form>
    </div>
  </div>

</section>
</main>
@endsection
