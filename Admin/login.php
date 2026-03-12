<?php
session_start();
require "conn.php";
if(isset($_SESSION['admin_username']))
{
     echo "<script>window.location.href = 'home';</script>";
}
if(isset($_POST['submit']))
{
    extract($_POST);
    $stmt_login = $conn->prepare("SELECT * FROM admin_details WHERE admin_login=:admin_login and admin_password=:admin_password");
    $stmt_login->execute(array(':admin_login'=>$admin_login,':admin_password'=>$admin_password));
    $row_login = $stmt_login->fetchAll(PDO::FETCH_ASSOC);
     if($row_login)
     {
           $_SESSION["admin_username"]=$_POST['admin_login'];
		   echo "<script>window.location.href='home';</script>";
     }
	 else
	 {
		 echo "<script>alert('Please enter correct Username and Password!!!')</script>" ;
	 }
}

?>
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

    <form class="space-y-5" method="post" action="">

      <div>
        <input type="text" name="admin_login" 
               placeholder="Username."
               class="w-full px-4 py-3 rounded-lg 
                      bg-white/30 placeholder-white
                      focus:outline-none focus:ring-2 
                      focus:ring-white">
      </div>

      <div>
        <input type="password" name="admin_password"
               placeholder="Password"
               class="w-full px-4 py-3 rounded-lg 
                      bg-white/30 placeholder-white
                      focus:outline-none focus:ring-2 
                      focus:ring-white">
      </div>

      <button class="w-full bg-white text-black 
                     font-semibold py-3 rounded-lg 
                     hover:bg-gray-200 transition duration-300" type="submit" name="submit">
        Login
      </button>

    </form>

    <p class="text-center mt-4 text-sm text-gray-200">
      Forgot Password?
    </p>

  </div>

</body>
</html>