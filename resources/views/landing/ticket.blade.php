@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<header class="h-[800px]">
   <div class="h-full flex justify-center items-center flex-col" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.jpg') }}) center center / cover no-repeat;">
      <div class="text-center">
         <div class="flex justify-center items-center space-x-5">
            <div class="devider hidden lg:inline-block"></div>
            <p class="text-xs text-white font-semibold">Taman Kita</p>
            <div class="devider hidden lg:inline-block"></div>
         </div>
         <h1 class="text-price md:text-pricexl lg:text-3xl font-bold text-white ">Book<span class="text-primary"> Ticket</span></h1>
         <p class="text-white font-normal text-xs  md:text-base mt-8 max-w-[75%] mx-auto">Welcome to the Family Play Zone, Where Adventure and Imagination Unite for Endless Fun and Laughter</p>
      </div>
   </div>
</header>
<section class="py-[200px]">
   @include('data.submission-display')
</section>
<x-bottom-nav></x-bottom-nav>
@endsection