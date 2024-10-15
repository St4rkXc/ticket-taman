@extends('layouts.app')

@section('content')
   <aside class="fixed left-0 w-[300px] h-screen border-r-gray-200 border p-8">
      <p class="text-[32px] font-bold text-text">Taman Kita</p>
      <div class="flex flex-col justify-between h-full my-12 pl-2">
         <a href="" class="flex space-x-2 items-center">
            <i class="fa-solid fa-house text-primary text-[28px]"></i>
            <p class="text-xl font-semibold text-text">Dashboard</p> 
         </a>
         <a class="flex space-x-2 items-center mb-24">
            <i class="fa-solid fa-right-from-bracket text-red-400 text-[28px]"></i>
            <p class="text-xl font-semibold text-red-400">Logout</p>
         </a>
      </div>
   </aside>

   <main class="ml-[300px] py-6 px-8 space-y-7">
      {{-- Header --}}
      <div class="flex justify-between">
         <div class="flex items-center space-x-6">
            <p class="text-[32px] text-text font-bold">Dashboard</p>
            <div>
               <p class="text-xxs text-text/60">{{ now()->format('h : i A') }}</p> {{-- Isi make date time hari ini --}}
               <p class="text-xxs text-text/60">{{ now()->format('l, F d, Y') }}</p>
            </div>
         </div>
         <div class="flex items-center space-x-6">
            <i class="fa-regular fa-user text-xl text-text p-4 rounded-full border-gray-200 border"></i>
            <div>
               <p class="text-base text-text font-bold">Ferra Alexandra</p>
               <p class="text-xxs text-text/60 font-light">Admin</p>
            </div>
         </div>
      </div>

      {{-- Jumlah Booking --}}
      <section class="p-8 border border-gray-200 rounded-lg">
         <div class="flex justify-between items-center">
            <div>
               <p class="text-xl text-text font-bold">Jumlah Booking</p>
               <p class="text-xxs text-text/60 font-light">Jumlah Pengunjung yang datang minggu terakhir</p>
            </div>
            <div class="text-end">
               <p class="text-price text-text font-bold leading-none">198</p>
               <p class="text-xs text-text/60 font-normal">Total Booking minggu ini</p>
            </div>
         </div>
         <canvas id="bookChart" class="max-h-[350px] mt-4"></canvas>
      </section>
      <section class="grid grid-cols-2 gap-4">
         <div class="bg-text p-6 rounded-lg">
            <div>
               <p class="text-xl text-white font-bold">Jumlah Booking</p>
               <p class="text-xxs text-white/60 font-light">Jumlah Pengunjung yang datang minggu terakhir</p>
            </div>
            <div>
               <ul class="list-none mt-6">
                  <li class="flex justify-between items-center py-4 border-b border-b-white/20">
                     <div>
                        <p class="text-white text-base font-bold leading-none">Renault Scadia</p> {{-- Taaruh data nama di sini --}}
                        <div class="flex gap-2 mt-2">
                           <p class="text-xxs font-light text-white">Child : <span class="font-bold">3</span></p> {{-- Taaruh data tiket di sini --}}
                           <p class="text-xxs font-light text-white">Adult : <span class="font-bold">3</span></p> {{-- Taaruh data tiket di sini --}}
                        </div>
                     </div>
                     <p class="text-white text-base font-bold leading-none">12 May, 2024</p>
                  </li>
                  <li class="flex justify-between items-center py-4 border-b border-b-white/20">
                     <div>
                        <p class="text-white text-base font-bold leading-none">Renault Scadia</p>
                        <div class="flex gap-2 mt-2">
                           <p class="text-xxs font-light text-white">Child : <span class="font-bold">3</span></p>
                           <p class="text-xxs font-light text-white">Adult : <span class="font-bold">3</span></p>
                        </div>
                     </div>
                     <p class="text-white text-base font-bold leading-none">12 May, 2024</p>
                  </li>
                  <li class="flex justify-between items-center py-4 border-b border-b-white/20">
                     <div>
                        <p class="text-white text-base font-bold leading-none">Renault Scadia</p>
                        <div class="flex gap-2 mt-2">
                           <p class="text-xxs font-light text-white">Child : <span class="font-bold">3</span></p>
                           <p class="text-xxs font-light text-white">Adult : <span class="font-bold">3</span></p>
                        </div>
                     </div>
                     <p class="text-white text-base font-bold leading-none">12 May, 2024</p>
                  </li>
                  <li class="flex justify-between items-center py-4 border-b border-b-white/20">
                     <div>
                        <p class="text-white text-base font-bold leading-none">Renault Scadia</p>
                        <div class="flex gap-2 mt-2">
                           <p class="text-xxs font-light text-white">Child : <span class="font-bold">3</span></p>
                           <p class="text-xxs font-light text-white">Adult : <span class="font-bold">3</span></p>
                        </div>
                     </div>
                     <p class="text-white text-base font-bold leading-none">12 May, 2024</p>
                  </li>
                  <li class="flex justify-between items-center py-4 ">
                     <div>
                        <p class="text-white text-base font-bold leading-none">Renault Scadia</p>
                        <div class="flex gap-2 mt-2">
                           <p class="text-xxs font-light text-white">Child : <span class="font-bold">3</span></p>
                           <p class="text-xxs font-light text-white">Adult : <span class="font-bold">3</span></p>
                        </div>
                     </div>
                     <p class="text-white text-base font-bold leading-none">12 May, 2024</p>
                  </li>
               </ul>
            </div>
         </div>
         
         <div class="bg-primary p-6 rounded-lg flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center">
               <p class="text-text text-pricexl font-bold">304</p>
               <p class="text-text text-base font-semibold">Total Pengunjung Hari Ini</p>
               <div class="flex gap-4 opacity-60">
                  <p class="text-text font-xxs font-semibold">May 12, 2024</p> {{-- Date Hari ini --}}
                  <p class="text-text font-xxs font-semibold">12 : 00 PM</p>  {{-- Waktu Hari ini --}}

               </div>
            </div>
         </div>
      </section>
   </main>


   {{-- Chart.js Script --}}
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
      document.addEventListener('DOMContentLoaded', () => {
         const ctx = document.getElementById('bookChart').getContext('2d');

         // Dummy data for bookings
         const bookChart = new Chart(ctx, {
            type: 'line',
            data: {
               labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], /* taruh data di sini juga (ini untuk label hari) */
               datasets: [{
                  label: 'Booking per Day',
                  data: [70, 90, 113, 95, 132, 103, 97], // Taruh data di sini
                  borderColor: 'rgba(209, 250, 148,1)',
                  backgroundColor: 'rgba(209, 250, 148,1)',
                  borderWidth: 2,
                  tension: 0.2, // Smooth line
                  pointRadius: 5,
                  pointBackgroundColor: 'rgba(75, 192, 192, 1)',
               }]
            },
            options: {
               responsive: true,
               maintainAspectRatio: false,
               plugins: {
                  legend: {
                     display: true,
                     position: 'bottom',
                  }
               },
               scales: {
                  x: {
                     grid: {
                        display: false, 
                     },
                     title: {
                        display: false,
                        text: 'Days of the Week',
                     }
                  },
                  y: {
                     ticks: {
                     maxTicksLimit: 5,
                  },
                     grid: {
                     display: true, 
                     drawBorder: false, 
                  },
                     title: {
                        display: false,
                        text: 'Number of Bookings',
                     },
                     beginAtZero: true,
                  }
               }
            }
         });
      });
   </script>
@endsection
