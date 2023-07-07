@extends('layouts.layout')

@section('show')
<main class="home">
<section class="py-5 text-center container">
@if (session('success'))
    <div class="card mb-4">
        <div class="card-body">
            <p class="card-text">{{ session('success') }}</p>
        </div>
    </div>
@endif

    <!-- <div class="container">  -->
        <h1>Forum Details</h1>

        <div class="card" style="margin-top:60px ;">
            <div class="card-body">
                <h5 class="card-title">{{ $forum->title }}</h5>
                <p class="card-text">{{ $forum->description }}</p>
                <a href="{{ route('forums.index') }}" class="btn btn-primary">Back to Forums</a>
            </div>
        </div>

        <h2>Comments</h2>

        @if ($comments)
            @foreach ($comments as $comment)
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">{{ $comment->content }}</p>
                        <p class="card-text">Posted by: {{ $comment->user ? $comment->user->name : 'Unknown' }}</p>

                    </div>
                </div>
            @endforeach
        @else
            <p>No comments available.</p>
        @endif

        <h2>Add a Comment</h2>

        <form action="{{ route('comments.store', $forum) }}" method="POST">

            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" required></textarea>
            </div>
            <input type="hidden" name="forum_id" value="{{ $forum->id }}">
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div>
</section>
</main>
@endsection
