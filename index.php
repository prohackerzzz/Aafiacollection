<?php 
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rehan";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src='main.js'></script>
    <?php require "include/header.php";?>
    <hr>
    <div class="ban"><img src="images/avc-royal-design-no-1007.jpg"></div>
    <div class="first"> Our Collections</div>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <?php
             $sql = "SELECT prodid, prod_img, prod_cat, prod_name, prod_price FROM product";
             $result = $conn->query($sql);
             
             if ($result->num_rows > 0) {
               // output data of each row
               while($row = $result->fetch_assoc()) {
                 ?>
              
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.php?pid=<?php echo htmlentities($row['prodid']);?>">
                
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src=<?php echo htmlentities($row['prod_img'])?>>
            
                </a>
              <div class="mt-4">
                
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo htmlentities($row['prod_cat'])?></h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium"><?php echo htmlentities($row['prod_name'])?></h2>
                <p class="mt-1"><?php echo htmlentities($row['prod_price'])?></p> 
               
        
              
          
    
              </div>
            </div>
            <?php
               }
              }
?>
          </div>
        </div>
      </section>
      <div class="first"> New Arrivals</div>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">The Catalyzer</h2>
                <p class="mt-1">$16.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">Shooting Stars</h2>
                <p class="mt-1">$21.15</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">Neptune</h2>
                <p class="mt-1">$12.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">The 400 Blows</h2>
                <p class="mt-1">$18.40</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">The Catalyzer</h2>
                <p class="mt-1">$16.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">Shooting Stars</h2>
                <p class="mt-1">$21.15</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">Neptune</h2>
                <p class="mt-1">$12.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-481 rounded overflow-hidden" href="viewprod.html">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-9000 title-font text-lg font-medium">The 400 Blows</h2>
                <p class="mt-1">$18.40</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <?php require "include/footer.php";?>
</body>
</html>