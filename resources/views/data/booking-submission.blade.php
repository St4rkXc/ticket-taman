{{-- RESPONSIVE FORM TO SUBMIT --}}

<div class="container mx-auto py-[100px] px-10 lg:px-0">
   <div class="flex flex-col-reverse lg:flex-row gap-16 justify-normal md:justify-between">
      <div>
         <div>
            <h1 class="text-[32px] md:text-2xl font-bold text-text">Lets Book Your Ticket</h1>
            <p class="text-xs text-text">Don't miss out on the adventure of a lifetime! Secure your tickets today and get
               ready to experience the excitement, fun, and unforgettable memories that await you at Taman Kita!</p>
         </div>
         <form action="{{ route('bookings.confirm') }}" method="post" class="mt-10 space-y-10">
            @csrf
            <input type="text" name="nama" class="w-full my-input bg-transparent" placeholder="Name" required>
            <div class="flex flex-col md:flex-row gap-10 md:gap-4">
               <input type="text" name="adult_count" class="my-input w-full bg-transparent" placeholder="18+ Ages"
                  required>
               <input type="text" name="child_count" class="my-input w-full bg-transparent" placeholder="0-18 Ages"
                  required>
            </div>
            <input type="text" name="booking_date" id="customDate" class="my-input w-full bg-transparent"
               placeholder="Booking Time" required>
            <button type="submit" class="btn-primary block w-fit mt-12 font-bold">Book Ticket</></button>
         </form>
      </div>
      <div class="h-[300px] lg:h-[600px] lg:w-full">
         <img src="{{ asset('Images/Book.jpg') }}" alt="" class="h-full w-full object-cover" ">
   </div>
</div>
</div>
