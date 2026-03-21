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

<title>Finworld Solutions - Login</title>
<link rel="icon" href="images/finworld_logo.ico">
<link rel="icon" type="image/png" sizes="32x32" href="images/finworld_logo.ico">
<link rel="icon" type="image/png" sizes="16x16" href="images/finworld_logo.ico">
<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="min-h-screen flex items-center justify-center
bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-500 p-4">

<div class="w-full max-w-5xl
rounded-3xl overflow-hidden
shadow-2xl
grid grid-cols-1 md:grid-cols-2">


<!-- LEFT IMAGE -->
<div class="hidden md:block">

<img
src="Images/login.jpg"
class="w-full h-full object-cover">

</div>


<!-- RIGHT LOGIN -->
<div class="p-10
bg-black/30 backdrop-blur-xl
border border-white/20
shadow-2xl

text-white flex flex-col justify-center">


<!-- Logo -->
<div class="text-center mb-8">

<h1 class="text-3xl font-extrabold
bg-gradient-to-r from-yellow-300 via-white to-blue-300
bg-clip-text text-transparent">

Finworld Solutions

</h1>

<p class="text-sm text-white/80 mt-1">
Admin Dashboard Login
</p>

</div>


<form method="post" class="space-y-5">

<input
type="text"
name="admin_login"
placeholder="Username"
required
class="w-full px-4 py-3 rounded-xl
bg-white/20 border border-white/30
placeholder-white
focus:outline-none focus:ring-2 focus:ring-white">


<div class="relative">

<input
type="password"
id="password"
name="admin_password"
placeholder="Password"
required
class="w-full px-4 py-3 rounded-xl
bg-white/20 border border-white/30
placeholder-white
focus:outline-none focus:ring-2 focus:ring-white pr-12">

<button
type="button"
onclick="togglePassword()"
class="absolute right-4 top-1/2 -translate-y-1/2">

👁

</button>

</div>


<button
type="submit"
name="submit"
class="w-full py-3 rounded-xl
bg-white text-indigo-700 font-semibold
hover:bg-gray-200 transition">

Login

</button>

</form>


<!-- Footer Credit -->
<p class="text-center text-xs text-white/80 mt-8">

Developed by
<a href="https://softgrowthinfotech.com"
class="font-semibold hover:underline">
SoftGrowth Infotech
</a>

</p>

</div>

</div>


<script>

function togglePassword(){

let password = document.getElementById("password");

password.type =
password.type === "password" ? "text" : "password";

}

</script>


</body>
</html>