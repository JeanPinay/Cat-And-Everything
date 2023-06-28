@extends ('layouts.layout')
@section('welcome')

<main class="page1">
    <section class="py-5 text-center container">
      <div class="p-4 p-md-5 mb-4 text-black rounded">
        <div class="col-lg-9 col-md-8 mx-auto">
          <div class="image-wrapper">
            <img src="{{ asset('images/homepage/CatAndEverything.png') }}" alt="Website image" class="img-fluid mb-3">
          </div>
        </div>
      </div>
    </section>
</main>

<main class="home">
  <section class="py-5 text-center container">
    <h2 style="margin-bottom: 60px; margin-top: 40px; font-family: 'Gagalin', sans-serif; font-size:40px;">Feel free to explore and discover our website</h2>
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="rounded-sides-container">
          <div class="rounded-sides">
          <h5 class="card-title">Cat Astrology</h5>
            <p class="card-text">Decode your pet's personality with the power of the zodiac. Based on a book from Stella Andromeda.
              Answers all the burning questions you may have about your current or future cat/pet.
              Fun and revealing!
            </p>
            <a href="{{ route('signs') }}" class="btn btn-primary" id="text" >Zodiac Sign</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="rounded-sides-container">
          <div class="rounded-sides">
          <h5 class="card-title">Forum</h5>
            <p class="card-text">Post tips and questions about your cat or just want to flex your cat?
                You can do that here without being judged. This website is made for you to show love to fellow cat lover, let's help each other.
                Don't forget to register first!
            </p>
            <a href="#" class="btn btn-primary" id="text" >Click here</a>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3 mb-4">
        <div class="rounded-sides-container">
          <div class="rounded-sides">
          <h5 class="card-title">Shop</h5>
            <p class="card-text">We are selling things for your cat and you! Explore our shop and discover a world of feline delights, 
              where you can indulge your beloved pet with high-quality items designed to bring them joy and comfort. Free delivery around Antwerp.
            </p>
            <a href="#" class="btn btn-primary" id="text" >Shop now</a>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3 mb-4">
        <div class="rounded-sides-container">
          <div class="rounded-sides">
          <h5 class="card-title">Cat sitting</h5>
            <p class="card-text">Going on a vacation? We have a solution for you. Leave your beloved feline in trusted hands with our professional cat sitting services,
              providing attentive care and companionship while you're away.
            </p>
            <a href="#" class="btn btn-primary" id="text">Read More</a>
          </div>
        </div>
      </div>


    </div>
  </section>



<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: rgba(252,223,135,255);">

<div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light" style="font-family: 'Gagalin', sans-serif;">Adopt, don't shop!</h1>
        <p class="card-text" id="adopt">
        As a foster mom for cats, I wholeheartedly believe in the mantra "adopt, don't shop." 
        By providing a loving and temporary home for cats in need, I contribute to their well-being and
        promote the importance of animal adoption. It brings me joy to see these cats find their forever homes, 
        knowing I played a part in their journey. Fostering allows me to make a meaningful difference in the lives of these feline companions 
        while advocating for the importance of adoption over supporting pet stores or breeders.</p>
        <a href="#" class="btn btn-primary" id="text">Check it here</a>
  </div>
</div>
</section>


</main>

@endsection