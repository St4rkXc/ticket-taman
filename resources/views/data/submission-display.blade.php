{{-- DISPLAY SUBMITTED DATA FOR CONFIRMATION --}}

<div class="container mx-auto">
      <div class="text-center">
         <div class="flex justify-center items-center space-x-5">
            <div class="devider-white hidden lg:inline-block"></div>
            <p class="text-xs text-text font-semibold">Taman Kita</p>
            <div class="devider-white hidden lg:inline-block"></div>
         </div>
         <p class="text-[32px] md:text-2xl font-bold mt-3">Ticket Confirmation</p>
      </div>
      <div class="flex  justify-center items-center">
         <div>
            <div class="flex flex-col-reverse lg:flex-row gap-12">
               <div>
                  <img src="{{asset('Images/QR.png')}}" alt="" class="w-[560px]">
               </div>
               <div class="mt-12 space-y-8 text-center lg:text-start">
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Name</p>
                     <p class="text-pricexl text-text font-bold ">{{ $nama }}</p>{{-- Ini di ganti pake nama di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Tickets</p>
                     <div class="flex gap-8 justify-center lg:justify-start">
                        <p class="text-xl text-text font-semibold">Adults :<span class="font-bold"> {{ $adult_count }}</span></p>
                        <p class="text-xl text-text font-semibold">Kids :<span class="font-bold"> {{ $child_count }}</span></p>
                     </div>{{-- Ini di ganti pake jenis ticket sm jumlahnya jg di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Booking Date</p>
                     <p class="text-xl text-text font-semibold "> {{ \Carbon\Carbon::parse($booking_date)->format('l, d F Y') }}</p>{{-- Ini di ganti sesuai di form --}}
                  </div>
                  <div>
                     <p class="text-xs text-text/60 font-semibold">Pricing</p>
                     <p class="text-price text-text font-bold ">${{ $total_price }}</p>{{-- Ini mu aja yag bikin sistem pricing nya --}}
                  </div>
               </div>
            </div>
            <div class="space-y-4 mt-4 p-3 lg:mt-0">
            <form action="{{ route('booking.store.final') }}" method="post">
                  <a class="btn-primary w-full block text-center" href="/ticket-record">Book Ticket</a>
                  <a class="btn-secondary w-full text-text block text-center" href="/">Cancel Booking</a>
               </form>
            </div>
         </div>
      </div>
   </div>