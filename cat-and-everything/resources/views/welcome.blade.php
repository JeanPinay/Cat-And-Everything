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
<main class="page1">
<section class="py-5 text-center container" >
    <h2 style="margin-bottom: 50px;">What do you need? Feel free to explore and discover our website.</h2>
    <div class="row">
    <div class="col-md-6 col-lg-3 mb-4" > 
        <div class="card">
          <div class="card-body" style="background-color: #fef2f4;">
            <h5 class="card-title">Cat Astrology</h5>
            <p class="card-text">Decode your pet's personality with the power of the zodiac. Based on a book from Stella Andromeda.
                Answers all the burning questions you may have about your current or future cat/pet. 
                Fun and revealing!
            </p>
            <a href="{{ route('signs') }}" class="btn btn-primary" style="background-color: #80728d;">Zodiac Sign</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
          <div class="card-body" style="background-color: #fef2f4;">
            <h5 class="card-title">Forum</h5>
            <p class="card-text">Post tips and questions about your cat or just want to flex your cat?
                You can do that here without being judged. This website is made for you to show love to fellow cat lover, let's help each other.
                Don't forget to register first!
            </p>
            <a href="#" class="btn btn-primary" style="background-color: #80728d;">Click here</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
          <div class="card-body" style="background-color: #fef2f4;">
            <h5 class="card-title">Shop</h5>
            <p class="card-text">We are selling things for your cat and you! Explore our shop and discover a world of feline delights, 
              where you can indulge your beloved pet with high-quality items designed to bring them joy and comfort.
            </p>
            <a href="#" class="btn btn-primary" style="background-color: #80728d;">Shop now</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card">
          <div class="card-body" style="background-color: #fef2f4">
            <h5 class="card-title">Cat sitting</h5>
            <p class="card-text">Going on a vacation? We have a solution for you. Leave your beloved feline in trusted hands with our professional cat sitting services,
              providing attentive care and companionship while you're away.
            </p>
            <a href="#" class="btn btn-primary" style="background-color: #80728d;">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #fef2f4;">

<div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light">Acknowledgements</h1>
        <p class="lead text-muted">
        Particular thanks are due to Kate Pollard,
Publishing Director at Hardie Grant, for her
Taurean passion for beautiful books and
for commissioning this series. And to
editor Eila Purvis, for all her hard work and
attention to detail. While the illustrations
and design talent of Evi O Studio have
produced small works of art. With such
a star-studded team, these books can
only shine and for that, my thanks.</p>
  </div>
</div>
</section>

<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #fef2f4;">
  <div class="row py-lg-5">
    <div class="col-lg-9 col-md-8 mx-auto">
      <h1 class="fw-light">About the Author</h1>
        <p class="lead text-muted">
        Stella Andromeda has been studying
astrology for over 30 years, believing that
a knowledge of the constellations of the
skies and their potential for psychological
interpretation can be a useful tool. This
extension of her study into book form makes
modern insights about the ancient wisdom
of the stars easily accessible, sharing her
passionate belief that reflection and self-
knowledge only empowers us in life. With her
sun in Taurus, Aquarius ascendant and moon
in Cancer, she utilises earth, air and water
to inspire her own astrological journey</p>
  </div>
</div>
</section>
</main>

@endsection