@extends ('layouts.layout')
@section ('contact')

<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #F1DEC9;">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light display-4 fst-italic">How can we help you?</h1>
    </div>
</div>
    <div class="p-5 text-center" style="background-color: #C8C2BC; background-size: cover; background-position: center;">
        <form action="{{ route('submitted') }}" method="POST" class="contact-form">
            @csrf
            <div class="mb-3">
                <input class="form-control" id="name" type="text" name="name" placeholder="Name" style="background-color: #FDEDEC; color: #6C5B7B; border-color: #F5A9BC;">
            </div>

            <div class="mb-3">
                <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email" style="background-color: #FDEDEC; color: #6C5B7B; border-color: #F5A9BC;">
            </div>

            <div>
                <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" name="message" rows="5" cols="30" placeholder="Message" style="background-color: #FDEDEC; color: #6C5B7B; border-color: #F5A9BC;"></textarea>
            </div>

            <button class="btn btn-primary" type="submit" style="background-color: #F5A9BC; border-color: #F5A9BC;">Submit</button>
        </form>
    </div>
</div>
@endsection