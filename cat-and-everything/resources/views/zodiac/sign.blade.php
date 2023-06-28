<!-- TODO: detail page of every article  -->
@extends('layouts.layout')
@section('signs')
<style>
  body {
    background-color: #fef2cf;
  }
</style>

<h1 class="text-body-emphasis text-center mt-5" style="color: #000000;" id="">{{$sign->name}}</h1>
<div class="container my-5 ">
<div class="p-5 text-center " style="background-image: url('https://cf.ltkcdn.net/horoscopes/images/orig/287818-1600x1066-astrological-signs.jpg'); background-size: cover; background-position: center;">

    
    <p class="lead my-3" style="color: #000000;" id="description">
    {{$sign->description}}
    </p>
    
</div>
</div>
<div class="d-inline-flex gap-5 mb-5 align-item-center">
    <a href="{{ route('signs') }}" class="btn btn-primary">Back</a>
    </div>


@endsection