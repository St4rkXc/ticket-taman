@extends('layouts.app')
@section('content')
<x-navbar></x-navbar>
<header class="w-full h-screen  relative">
   <div class="relative w-full h-full flex justify-center items-center space-y-5" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('Images/Hero.jpg') }}) center center / cover no-repeat;">
      <div class="text-center">
         <div class="flex justify-center items-center space-x-5">
            <div class="devider hidden md:inline-block"></div>
            <p class="text-xs text-white font-semibold">Taman Kita</p>
            <div class="devider hidden md:inline-block"></div>
         </div>
         <h1 class="text-price md:text-pricexl lg:text-3xl font-bold text-white ">Gateway to <span class="text-primary">Fun!</span></h1>
         <p class="text-white font-normal text-xs  md:text-base mt-8 max-w-[75%] mx-auto">Experience a world of fun, excitement, and unforgettable memories as you explore every corner of Taman Kita, where adventure and joy await around every turn!</p>
         <div class="flex flex-col md:flex-row gap-[16px] mt-8 mx-auto justify-center items-center">
            <a href="#book" class="btn-primary w-fit">Book Ticket</a>
            <a href="#gallery" class="btn-secondary w-fit">See Facility</a>
         </div>
      </div>
   </div>
</header>

{{-- * About Us  --}}
<section class="bg-text" id="about"> 
   <div class="container py-[100px] mx-auto px-8 md:px-4 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-between"> {{-- Heading --}}
         <div class="w-fit ">
            <div class="flex flex-col md:flex-row items-center gap-5 justify-center lg:justify-start mb-4 md:mb-0">
               <div class="devider hidden md:inline-block"></div>
               <p class=" text-xxs md:text-xs text-white font-semibold">About Us</p>
               <div class="devider block md:inline-block lg:hidden mt-2 md:mt-0"></div>
            </div>
            <p class="text-[32px] md:text-2xl font-semibold text-white text-center lg:text-start">Top-Notch Facilities for Your Ultimate Comfort and Enjoyment!</p>
         </div>
         <div class="w-full lg:w-1/2 text-center lg:text-start mt-4 lg:mt-0 flex items-center">
            <p class="text-white text-xs">At Taman Kita, we’ve thoughtfully designed every facility to cater to your comfort and enjoyment. From kid-friendly play areas and cozy relaxation zones to convenient dining and rest stops, we have everything you need to make your visit seamless and unforgettable!</p>
         </div>
      </div>
      <div class="mt-20">
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="text-center md:text-start"> {{-- ? Cards --}}
               <i class="fa-solid fa-football text-primary text-[64px]"></i>
               <div class="mt-8">
                  <p class="text-xl text-white font-semibold">Family Play Zone</p>
                  <p class="mt-4 text-xs text-white">A safe and engaging area filled with fun play structures, swings, and interactive games, perfect for kids of all ages to unleash their energy and creativity.</p>
               </div>
            </div>
            <div class="text-center md:text-start" > {{-- ? Cards 2 --}}
               <i class="fa-solid fa-tree text-primary text-[64px]"></i>
               <div class="mt-8">
                  <p class="text-xl text-white font-semibold">Picnic and Relaxation Area</p>
                  <p class="mt-4 text-xs text-white">Shaded spots equipped with picnic tables and benches, ideal for families and friends to unwind, enjoy a meal, or simply soak in the serene surroundings.</p>
               </div>
            </div>
            <div class="text-center md:text-start"> {{-- ? Cards 3 --}}
               <i class="fa-solid fa-bowl-food text-primary text-[64px]"></i>
               <div class="mt-8">
                  <p class="text-xl text-white font-semibold">Food and Beverage Stalls</p>
                  <p class="mt-4 text-xs text-white">A variety of food stalls offering delicious snacks, refreshing beverages, and local delicacies to satisfy your cravings while you explore the park.</p>
               </div>
            </div>
            <div class="text-center md:text-start"> {{-- ? Cards 4 --}}
               <i class="fa-solid fa-leaf text-primary text-[64px]"></i>
               <div class="mt-8">
                  <p class="text-xl text-white font-semibold">Nature Trails Walking Paths</p>
                  <p class="mt-4 text-xs text-white">Beautifully landscaped walking paths and nature trails for leisurely strolls or brisk walks, allowing you to connect with nature and enjoy the scenic views throughout Taman Kita.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

{{-- * Gallery --}}
<section id="gallery">
   <div class="container mx-auto py-[100px]">
      <div class="text-center">
         <div class="flex flex-col md:flex-row justify-center items-center space-x-5 ">
            <div class="devider-white hidden md:inline-block"></div>
            <p class="text-xxs md:text-xs font-semibold text-text">Gallery</p>
            <div class="devider-white block md:inline-block mt-2 md:mt-0"></div>
         </div>
         <p class=" text-[32px] md:text-2xl font-bold text-text">Image Gallery</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-[56px] px-10 lg:p-0 ">
         <div class=" h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Book.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Bloom Garden</p>
               <p class="text-white text-[12px]">Central Park</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-2.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Aider Lake</p>
               <p class="text-white text-[12px]">Central Park</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-3.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Children Playground</p>
               <p class="text-white text-[12px]">Entier Areas</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-4.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Children Playground</p>
               <p class="text-white text-[12px]">Entier Areas</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-5.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Children Playground</p>
               <p class="text-white text-[12px]">Central Park</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-6.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Children Playground</p>
               <p class="text-white text-[12px]">Central Park</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-7.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Children Playground</p>
               <p class="text-white text-[12px]">Front Wayt</p>
            </div>
         </div>
         <div class="h-[260px] md:h-[369px] group relative" style="background:url({{ asset('Images/Gallery-8.jpg') }}) center center / cover no-repeat; ">
            <div class="absolute bottom-0 w-full bg-black/50 p-2 px-4 opacity-0 group-hover:opacity-100 duration-300">
               <p class="text-white text-xs ">Luki Guis</p>
               <p class="text-white text-[12px]">Front Wayt</p>
            </div>
         </div>
      </div>
   </div>
</section>

{{-- *Book --}}
<section id="book">
   <div class="container mx-auto py-[100px] px-10 lg:px-0">
      <div class="flex flex-col-reverse lg:flex-row gap-16 justify-normal md:justify-between">
         <div>
            <div>
               <h1 class="text-[32px] md:text-2xl font-bold text-text">Lets Book Your Ticket</h1>
               <p class="text-xs text-text">Don't miss out on the adventure of a lifetime! Secure your tickets today and get ready to experience the excitement, fun, and unforgettable memories that await you at Taman Kita!</p>
            </div>
            <form class="mt-10 space-y-10">
               <input type="text" class="w-full my-input" placeholder="Name">
               <div class="flex flex-col md:flex-row gap-10 md:gap-4">
                  <input type="text" class="my-input w-full" placeholder="18+ Ages">
                  <input type="text" class="my-input w-full" placeholder="0-18 Ages">
               </div>
               <input type="text" id="customDate" class="my-input w-full" placeholder="Booking Time">
               <button type="submit" class="btn-primary block w-fit mt-12 font-bold"><a href="/confirmation">Book Ticket</a></button>
            </form>
         </div>
         <div class="h-[300px] lg:h-[600px]">
            <img src="{{asset('Images/Book.jpg')}}" alt="" class="h-full  object-cover" ">
         </div>
      </div>
   </div>
</section >

<section id="CTA">
   <div class="flex justify-center flex-col items-center h-[500px] p-4 md:p-0" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url({{ asset('Images/CTA.jpg') }}) center center / cover no-repeat;">
      <p class="text-price md:text-pricexl font-bold text-white text-center  md:text-start">Get Your Ticket <span class="text-primary">Now</span></p>
      <p class="text-xs md:text-base text-white text-center">
         Don't Miss Out on the Fun! Secure Your Spot for an Unforgettable Experience at Taman Kita!
      </p>
      <a href="#" class="btn-primary mt-8">Book Ticket</a>
      
   </div>
</section>

<x-bottom-nav></x-bottom-nav>

<script>
   const dateInput = document.getElementById('customDate');
   
   // Optional: Customize the display or force the value format
   dateInput.addEventListener('focus', () => (dateInput.type = 'date'));
   dateInput.addEventListener('blur', () => {
      if (!dateInput.value) dateInput.type = 'text';
   });
 </script>
@endsection
