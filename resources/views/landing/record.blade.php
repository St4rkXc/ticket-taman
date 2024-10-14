@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<header class="h-[800px]">
   <div class="h-full flex justify-center items-center flex-col" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.jpg') }}) center center / cover no-repeat;">
      <div class="text-center">
         <div class="flex justify-center items-center space-x-5">
            <div class="devider"></div>
            <p class="text-xs text-white font-semibold">Taman Kita</p>
            <div class="devider"></div>
         </div>
         <h1 class="text-3xl font-bold text-white ">Book<span class="text-primary"> Ticket</span></h1>
         <p class="text-white font-normal text-base mt-8 max-w-[75%] mx-auto">Welcome to the Family Play Zone, Where Adventure and Imagination Unite for Endless Fun and Laughter</p>
      </div>
   </div>
</header>
<section>
   <div class="container mx-auto py-[200px]">
      <div class="flex flex-col justify-center items-center space-y-6">
         <p class="text-pricexl text-text font-bold w-1/2 mx-auto text-center">Congratulations your book recorded</p>
         <p class="text-base text-text">Thank You! Your Booking Has Been Successfully Recorded. Get Ready for an Exciting Experience at Taman Kita!</p>
         <a href="/" class="btn-primary mx-auto ">Return to home page</a>
      </div>
   </div>
</section>
<x-bottom-nav></x-bottom-nav>
@endsection