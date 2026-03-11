<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Login Card -->
  <div class="relative bg-white/20 backdrop-blur-xl 
              shadow-2xl rounded-2xl p-8 w-full max-w-md text-white">

    <h2 class="text-3xl font-bold text-center mb-6">
      Welcome Back
    </h2>

    <form class="space-y-5">

      <div>
        <input type="email" 
               placeholder="Email Address"
               class="w-full px-4 py-3 rounded-lg 
                      bg-white/30 placeholder-white
                      focus:outline-none focus:ring-2 
                      focus:ring-white">
      </div>

      <div>
        <input type="password" 
               placeholder="Password"
               class="w-full px-4 py-3 rounded-lg 
                      bg-white/30 placeholder-white
                      focus:outline-none focus:ring-2 
                      focus:ring-white">
      </div>

      <button class="w-full bg-white text-black 
                     font-semibold py-3 rounded-lg 
                     hover:bg-gray-200 transition duration-300">
        Login
      </button>

    </form>

    <p class="text-center mt-4 text-sm text-gray-200">
      Forgot Password?
    </p>

  </div>

</body>
</html>