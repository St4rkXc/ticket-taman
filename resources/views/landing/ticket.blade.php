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
         <h1 class="text-3xl font-bold text-white ">Book<span class="text-primary">Ticket</span></h1>
         <p class="text-white font-normal text-base mt-8 max-w-[75%] mx-auto">Welcome to the Family Play Zone: Where Adventure and Imagination Unite for Endless Fun and Laughter</p>
      </div>
   </div>
</header>
<section class="py-[200px]">
   <div class="container mx-auto">
      <div class="text-center">
         <div class="flex justify-center items-center space-x-5">
            <div class="devider-white"></div>
            <p class="text-xs text-text font-semibold">Taman Kita</p>
            <div class="devider-white"></div>
         </div>
         <p class="text-2xl font-bold mt-3">Ticket Confirmation</p>
      </div>
      <div class="flex justify-center items-center">
         <div>
            <div class="flex gap-12">
               <div>
                  <img src="{{asset('Images/QR.png')}}" alt="" class="w-[560px]">
               </div>
               <div class="mt-12 space-y-8">
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Name</p>
                     <p class="text-pricexl text-text font-bold ">Dione Stark</p>{{-- Ini di ganti pake nama di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Tickets</p>
                     <div class="flex gap-8">
                        <p class="text-xl text-text font-semibold">Adult :<span class="font-bold"> 3</span></p>
                        <p class="text-xl text-text font-semibold">Kids :<span class="font-bold"> 3</span></p>
                     </div>{{-- Ini di ganti pake jenis ticket sm jumlahnya jg di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Booking Date</p>
                     <p class="text-xl text-text font-semibold ">Sunday, 17 November 2024</p>{{-- Ini di ganti sesuai di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Pricing</p>
                     <p class="text-price text-text font-bold ">$32</p>{{-- Ini mu aja yag bikin sistem pricing nya --}}
                  </div>
               </div>
            </div>
            <div class="space-y-8">
               <button class="btn-primary w-full">Book Ticket</button>
               <button class="btn-secondary w-full text-text">Cancel Booking</button>
            </div>
         </div>
      </div>
   </div>
</section>
<x-bottom-nav></x-bottom-nav>
@endsection