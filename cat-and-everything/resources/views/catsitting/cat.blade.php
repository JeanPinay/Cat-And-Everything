@extends ('layouts.layout')

@section ('catsitting')

<main class="home">
<section class="py-5 text-center container">
<h2 style="margin-bottom: 60px; margin-top: 40px; font-family: 'Gagalin', sans-serif; font-size:40px;">Cat sitting service you can trust</h2>
<div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-80" id="zodiac" style="background-color: #ffd2d2;">
                <!-- <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">1st visit</h5>
                    <p class="card-text">Since I am aware that you want a cat sitter you can rely on, I am offering a free initial visit so you can decide whether you and your cat will like my services.</p>
                    <a href="#" class="btn btn-primary" id="text" >Free</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-80" id="zodiac" style="background-color: #ffd2d2;">
                <!-- <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">1 visit a day</h5>
                    <p class="card-text">There will only be one visit per day, and I'll spend 30 minutes with your cat. The owner can choose between morning and evening visits. Decision is yours.</p>
                    <a href="#" class="btn btn-primary" id="text" >€14</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-80" id="zodiac" style="background-color: #ffd2d2;">
                <!-- <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">2 visits a day</h5>
                    <p class="card-text">A morning and an evening visit will be made during this time. Each visit, I'll stay for 25 minutes. Give your cat food and drink, clean the litter box, and play/cuddle with them.  </p>
                    <a href="#" class="btn btn-primary" id="text" >€12</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-80 " id="zodiac" style="background-color: #ffd2d2;">
                <!-- <img src="{{asset('images/homepage/loginPaw2.png')}}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Stay the night</h5>
                    <p class="card-text"> I offer company, feeding, and any required medication while taking the utmost care and attention to ensure that your cat's nighttime routine is not interrupted.</p>
                    <a href="#" class="btn btn-primary" id="text" >€25</a>
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
        Entrusting your feline friend to a trusted cat sitter can transform your travel experiences, allowing you to 
        unwind and enjoy your time away without worry. A dedicated cat sitter not only ensures that your cat is fed and watered 
        ccording to their usual routine, but also provides companionship and monitors their well-being, mitigating the stress and 
        loneliness that cats may feel in their owner's absence. This peace of mind, knowing your cat is in capable and caring hands, allows you to sit back,
        relax, and make the most of your travels, ensuring both you and your pet have a positive experience.</p>
        <h6>I'll send pictures and updates; Any special request? Love to listen</h6>

</div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card" >
                <img src="{{asset('images/catsitting/catFood2.png')}}" alt="Image 1">
            </div>
            <h5 class="card-title">Give food, water and medication</h5>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/catsitting/litter2.png')}}" alt="Image 2">
            </div>
            <h5 class="card-title">Clean the litterbox</h5>

        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="circle-card">
                <img src="{{asset('images/catsitting/play2.png')}}" alt="Image 3">
            </div>
            <h5 class="card-title">Play, brush and cuddle</h5>
        </div>
    </div>
</div>
</section>

<section class="py-5 text-center container">
        <div class="p-4 p-md-5 mb-4 text-black rounded bg-light">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light display-4 fst-italic">Book a Cat Sitter</h1>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <form action="#" method="POST" class="booking-form">
                    @csrf <!-- Security token for form submission -->
                    <!-- Form inputs -->
                    <div class="mb-3">
                        <input class="form-control" type="text" name="fullName" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="emailAddress" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="tel" name="contactNumber" placeholder="Contact Number" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="address" placeholder="Your Address" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="specialInstructions" placeholder="Special Instructions"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="serviceDate" class="form-label">Preferred date and time:</label>
                        <input class="form-control" type="date" name="serviceDate" id="serviceDate" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="time" name="serviceTime" id="serviceTime" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



</main>
@endsection
