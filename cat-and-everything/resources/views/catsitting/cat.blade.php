@extends ('layouts.layout')

@section ('catsitting')

<main class="home">
<section class="py-5 text-center container">
    <h2 style="margin-bottom: 60px; margin-top: 40px; font-family: 'Gagalin', sans-serif; font-size:40px;">Cat sitting service you can trust</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
            <img src="{{asset('images/homepage/loginPaw2.png')}}" class="img-fluid" alt="Image 1">
            <h5 class="card-title mt-3">1st visit</h5>
            <p class="card-text">Since I am aware that you want a cat sitter you can rely on, I am offering a free initial visit so you can decide whether you and your cat will like my services. If you reserve two days of visits at once, the first visit is free.
            </p>
        </div>
    </div>
    </div>
        <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
            <img src="{{asset('images/homepage/loginPaw2.png')}}" class="img-fluid" alt="Image 2">
            <h5 class="card-title mt-3">1 visit a day</h5>
            <p class="card-text">There will only be one visit per day, and I'll spend 30 minutes with your cat. The owner can select between morning and evening visits. Give your cat food and drink, clean the litter box, and play with it. </p>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
            <img src="{{asset('images/homepage/loginPaw2.png')}}" class="img-fluid" alt="Image 3">
            <h5 class="card-title mt-3">2 visits a day</h5>
            <p class="card-text">A morning and an evening visit will be made during this time. Each visit, I'll stay for 25 minutes. Give your cat food and drink, clean the litter box, and play with it. It's crucial for me to be aware of cats who require special care. Please mention this when making your reservation.
            </p>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="py-5 text-center container">
    <h2 style="margin-bottom: 60px; margin-top: 40px; font-family: 'Gagalin', sans-serif; font-size:40px;">Cat sitting service you can trust</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 1">
            </div>
            <h3>Give food and drinks</h3>
            <p>"Many of life’s failures are people who did not realize how close they were to success when they gave up."– Thomas A. Edison</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 2">
            </div>
            <h3>Clean the litterbox</h3>
            <p></p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 3">
            </div>
            <h3>Play, brush and cuddle</h3>
            <p></p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 4">
            </div>
            <h3>Medication and special needs</h3>
            <p></p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 5">
            </div>
            <h3>Send pictures and updates</h3>
            <p></p>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 6">
            </div>
            <h3>Special request? Love to listen</h3>
            <p></p>
        </div>
    </div>
</div>
</section>
</main>
@endsection