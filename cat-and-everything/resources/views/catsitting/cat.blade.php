@extends ('layouts.layout')

@section ('catsitting')

<main class="home">
<!-- <section class="py-5 text-center container">
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
</section> -->
<section class="py-5 text-center container">
<h2 style="margin-bottom: 60px; margin-top: 40px; font-family: 'Gagalin', sans-serif; font-size:40px;">Cat sitting service you can trust</h2>
<div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-100" id="zodiac" style="background-color: #ffd2d2;">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">1st visit</h5>
                    <p class="card-text">Since I am aware that you want a cat sitter you can rely on, I am offering a free initial visit so you can decide whether you and your cat will like my services. If you reserve two days of visits at once, the first visit is free.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100" id="zodiac" style="background-color: #ffd2d2;">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">1 visit a day</h5>
                    <p class="card-text">There will only be one visit per day, and I'll spend 30 minutes with your cat. The owner can choose between morning and evening visits. Give your cat food and drink, clean the litter box, and play/cuddle with them. </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100" id="zodiac" style="background-color: #ffd2d2;">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">2 visits a day</h5>
                    <p class="card-text">A morning and an evening visit will be made during this time. Each visit, I'll stay for 25 minutes. Give your cat food and drink, clean the litter box, and play/cuddle with them.  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100" id="zodiac" style="background-color: #ffd2d2;">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Stay the night</h5>
                    <p class="card-text"> I offer company, feeding, and any required medication while taking the utmost care and attention to ensure that your cat's nighttime routine is not interrupted. You may have peace of mind knowing that your cat will feel loved and safe in the privacy of their own home.</p>
                </div>
            </div>
        </div>
</div>
</section>




<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: rgba(252,223,135,255);">
<div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light" style="font-family: 'Gagalin', sans-serif;">Sit back and relax,your cat is taken care of</h1>
        <p class="card-text" id="adopt">
        As a foster mom for cats, I wholeheartedly believe in the mantra "adopt, don't shop."
        By providing a loving and temporary home for cats in need, I contribute to their well-being and
        promote the importance of animal adoption. It brings me joy to see these cats find their forever homes,
        knowing I played a part in their journey. Fostering allows me to make a meaningful difference in the lives of these feline companions
        while advocating for the importance of adoption over supporting pet stores or breeders.</p>
        <a href="#" class="btn btn-primary" id="text">Check it here</a>
        <br>
        <br>
        <p>You can also check the shelter for adoption. Let's help the animals in need. </p>

</div>
</div>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/homepage/loginPaw2.png')}}" alt="Image 1">
            </div>
            <h3>Give food and water</h3>
            <!-- <p>I take seriously my duty to feed and hydrate your cat with wholesome food and water. I follow their feeding schedule and provide them with the best meals that fit to their specific dietary needs and food preferences.
                To make sure your cat stays hydrated and happy while in my care, fresh water is always accessible.</p> -->
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
