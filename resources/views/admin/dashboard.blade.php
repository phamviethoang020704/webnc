{{-- <x-app-layout>


    <div>
        @foreach ($bookings as $booking)
            <div style="border: 1px solid black">
                <p>{{ $booking->user ? $booking->user->name : 'Không có người dùng' }}</p>
                <p>{{ $booking->car ? $booking->car->name : 'Không có xe' }}</p>
                <p>{{ $booking->car ? $booking->car->trademark : 'Không có thương hiệu' }}</p>
                <p>{{ $booking->start_date }}</p>
                <p>{{ $booking->end_date }}</p>
                <p>{{ $booking->total_price }}</p>
                <p>{{ $booking->browsing_status }}</p>
                @if ($booking->browsing_status == false)
                    <form action="{{ Route('admin.approveBooking',$booking->id)}}" method="POST">
                        @csrf
                        <button type="submit">duyệt</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>
 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>
     <!-- Thêm CSS framework nếu cần (TailwindCSS hoặc Bootstrap) -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 </head>
 <body class="bg-gray-100 font-sans">
     <!-- Header -->
     <header class="bg-white shadow">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
             <h1 class="text-2xl font-bold">Dashboard</h1>
             <!-- Dropdown Menu -->
             <div class="relative">
                 <button id="user-menu" class="flex items-center space-x-2">
                     <span>{{ Auth::user()->name }}</span> <!-- Tên người dùng -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                     </svg>
                 </button>
                 <!-- Dropdown Content -->
                 <div id="menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                     <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Log Out</button>
                     </form>
                 </div>
             </div>
         </div>
     </header>

     <!-- Nội dung chính -->
     <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
         <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>
     </main>

     <script>
         // Script để toggle menu
         const userMenu = document.getElementById('user-menu');
         const menu = document.getElementById('menu');
         userMenu.addEventListener('click', () => {
             menu.classList.toggle('hidden');
         });
     </script>
 </body>
 </html>
