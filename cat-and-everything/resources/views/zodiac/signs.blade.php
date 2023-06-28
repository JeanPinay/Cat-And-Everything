@extends('layouts.layout')

@section('signs')
<main class="home">
<section class="home py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #F1DEC9;">
    <div class="col-lg-9 col-md-8 mx-auto">
    <h1 class="fw-light display-4 fst-italic">Cat Astrology</h1>
      <p class="lead my-3" style="color: #2C3333;">
        Just like us, every cat is born under an astrological sun sign
which is determined by their date of birth. If you know the
exact time and place of your cat's birth, you can have their
astrological birth chart drawn up which yields even more
information. However, even just knowing their sun sign
will give you some insight into your cat's personality and
character. This can in turn be helpful to your relationship
and improve your understanding of how you might clash
or chime with your puss.
From ancient mythology to folktales, the cat has
been an important, often mystical and sometimes even
scary companion to humans. The Egyptian cat goddess
Bastet - both seductive and ferocious - was protector of the
underworld. The first female child of Ra, she was linked
to the powerful Egyptian goddess Isis and usually depicted
in her company. We see something similar in the role played
by the witch's black cat, said to be a shape-shifting familiar
while the saying that a cat has nine lives comes from the old
superstition that a witch could turn into a cat and back again
eight times: but on the ninth time she would remain a cat
forever, But if there is one thing that is crystal clear, whether
we are talking about cartoon cats Felix and Tom, fashion
designer Karl Lagerfeld's muse, Choupette, beloved children's
book character Mog or even Dick Whittington's puss, it is
how much we dearly love our cats with all their quirky ways.</p>
</div>
</div>
</section>


<section class="py-5 text-center container">
<div class="row">
@foreach($signs as $sign)
  <div class="col-md-3 mb-4">
    <div class="card h-100">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body" style="background-color: #fcdf87;">
      <h5 class="card-title"><x-sign-preview-card :sign="$sign" /></h5>
        <p class="card-text">{{$sign->date}}</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$sign->sign}}</li>
            <li class="list-group-item">{{$sign->depicted_by}}</li>
            <li class="list-group-item">{{$sign->ruled_by}}</li>
            <li class="list-group-item">{{$sign->lucky_day}}</li>
            <li class="list-group-item">{{$sign->weak_spot}}</li>
          </ul>
    </div>
    </div>
  </div>
@endforeach
</div>
</section>


<section class="py-5 text-center container">
<div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #F1DEC9;">
    <div class="col-lg-9 col-md-8 mx-auto">
    
<h1 class="fw-light display-4 fst-italic">BIRTH DATE</h1>
      <p class="lead my-3" style="color: #2C3333;">
  In an ideal world, you'd know the date, time and place
  of your cat's birth, but just having their birth date will tell
  you which of the 12 zodiac Signs they are. If you are getting
  a new cat from a breeder, make a note to remember to ask
  for this information
  However, if you have given your cat a forever home from
  a rescue centre then you are unlikely to have this information
  If this is the case, then you can take the date of their adoption
  into your life as the starting point of your relationship with
  them, which you will discover is just as meaningful
  And, of course, the more you learn about your cat's
  personality, along with the key characteristics of each of the
  12 sun signs, then will soon find yourself quickly identifying
  which zodiac sign best sums up your cat.</p>
  </div>
</div>
</section>
</main>
@endsection