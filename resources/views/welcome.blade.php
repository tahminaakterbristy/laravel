<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Koral Style Hero</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.6/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="text-gray-800">

  <!-- Navbar -->
  <div class="absolute top-0 left-0 right-0 z-50 bg-transparent">
  <div class="navbar max-w-7xl mx-auto px-4">

    <!-- Logo Left -->
    <div class="flex-1">
      <a class="text-2xl font-bold text-white">Koral.</a>
    </div>

    <!-- Center Menu -->
    <div class="hidden lg:flex flex-1 justify-center space-x-8 text-2xl font-bold">
      <a class="text-white hover:text-orange-400 transition" href="#"><span class="text-orange-400">Home</span></a>
      <a class="text-white hover:text-orange-400 transition" href="#">Shop</a>
      <a class="text-white hover:text-orange-400 transition" href="#">Contact</a>
      <a class="text-white hover:text-orange-400 transition" href="#">About</a>
    </div>

    <!-- Cart Icon Right -->
    <div class="flex justify-center md:block ">
                <a class="relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                </a>
            </div>

  </div>
</div>

  <!-- Hero Section -->
  <div class="w-full h-screen bg-cover bg-center relative" style="background-image: url('../front-view-cyber-monday-composition.jpg');">
    <div class="absolute inset-0 bg-purple-900 bg-opacity-70"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
      <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
        Create Amazing Websites<br />With Amazing Graphics
      </h1>
      <p class="text-white text-lg mt-4 max-w-xl">
        Proin laoreet scelerisque sagittis. Aliquam molestie faucibus semper. Mauris pretium, urna quis venenatis condimentum.
      </p>
      <div class="mt-8 flex gap-4">
        <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-600 transition">Explore More</a>
        <a href="#" class="bg-white text-purple-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Buy Now</a>
      </div>
    </div>
  </div>

  <!-- Features Section -->
<div class="py-12 bg-white grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto px-6">
  <!-- Feature 1 -->
  <div class="flex items-start gap-6">
    <div class="text-orange-500">
      <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M9.75 17L8.25 21m7.5-4l1.5 4M6 3h12M6 3l1.406 6.484A2 2 0 009.375 11h5.25a2 2 0 001.969-1.516L18 3M6 3l.867 4.336M18 3l-.867 4.336" />
      </svg>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-2">Responsive Design</h3>
      <p class="text-gray-500">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
    </div>
  </div>

  <!-- Feature 2 -->
  <div class="flex items-start gap-6">
    <div class="text-orange-500">
      <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
      </svg>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-2">Visual Page Builder</h3>
      <p class="text-gray-500">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
    </div>
  </div>

  <!-- Feature 3 -->
  <div class="flex items-start gap-6">
    <div class="text-orange-500">
      <svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M9.75 17L8.25 21m7.5-4l1.5 4M12 6V3m0 3v3m0-3H9m3 0h3M4 10h4m12 0h-4M4 14h4m12 0h-4" />
      </svg>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-2">Strong Admin Panel</h3>
      <p class="text-gray-500">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
    </div>
  </div>
</div>



</body>
</html>
