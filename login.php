<?php 
error_reporting(0);
include 'includes/config.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login/Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <?php require 'include/header.php';?>
    <hr>
    <body>
    <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">We offer the best Collection of Suits</h1>
      
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Login</button>
      <a class="links" href="forgotpassword.php">Forget Password</a>  
      <a class="links" href="register.php">Create New account</a>
    </div>
  </div>
</section>
<hr>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
                <script src="" async defer></script>
        <?php include "include/footer.php";?>
    </body>
</html>
