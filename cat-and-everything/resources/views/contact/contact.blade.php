@extends ('layouts.layout')

@section ('contact')

<main class="page1">
<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #fef2cf;">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light display-4 fst-italic">How can we help you?</h1>
    </div>
</div>
<div class="p-5 text-center" style="background-color: #fef2cf;">
<form action="{{ route('submitted') }}" method="POST" class="contact-form">
    @csrf
    <input class="input" type="text" name="name" placeholder="Name">
    <input class="input" type="text" name="email" placeholder="Email Address">
    <textarea class="textarea" name="message" placeholder="Enter message"></textarea> 
    <center><button class="button" type="submit">Submit</button></center>
</form>
</div>
</section>
</main>
@endsection

