<?php
session_start();

include("connection.php");
include("function.php");


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online computer and accessory shop</title>
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <nav class="navigation ">
      <!-- navigation section -->
      
      

         <a href="info.php" target="_self" class="nav-link"><span title="More infomation you need to know">About Us</span></a>
         <a href="#" target="_self" class="nav-link"><span title="Profile and Settings">Profile</span></a></a>
         <a href="cart.php" target="_top" class="nav-link"><span title="Shopping details">Carts</span></a>
  </nav>
          <div class="dropdown">
            <span title=" You will be redirected to Login" class="dropbtn"><a href="logout.php" target="_self">Logout</a></span>

          </div>
    
</head>
<body class="product">
  

                                  <header>

                            
            <div><p class="user">Logged As:<?php   echo $_SESSION['user_id']; ?></p></div>

        
       <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>
        <a href="phone.php">Phones</a>
        <a href="laptops.php">Laptops</a>
        <a href="Monitor.php">Monitors</a>			
        <a href="Mouse.php">Mouse</a>
        <a href="Router.php">Router</a>
        <a href="keyboard.php">keyboard</a>
        <a href="Printer.php">Printer</a>
        <a href="3D.php">3D Printer</a>		
        <a href="Laptopbags.php">Bags</a>		
        <a href="storage.php">Storage Disks</a>
        <a href="Ethernet.php">Cables</a>			
        <a href="refurbish.php">Refurbished Items</a>			
              

      </div>

  <span title="Select prefered Category" onclick="openNav()" class="category">Category</span>

  <script>
  function openNav() {
  document.getElementById("mySidenav").style.width = "210px";
  }

  function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  }
  </script>
  <!-- search panel -->
<form>
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
      <div class="overlay-content"> 
        <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

                      <script src="main.js">
                          // Open the full screen search box
                  function openSearch() {
                  document.getElementById("myOverlay").style.display = "block";
                  }

                  // Close the full screen search box
                  function closeSearch() {
                  document.getElementById("myOverlay").style.display = "none";
                  }

                      </script>

  </div>
</header>
<img class="Introduction">
<center> <img src="./images/my page.jpg0" alt="" sizes="200" srcset="" class="font"></center>
        <h1><center>ONLINE COMPUTER ACCESSORY SHOP</center></h1>
        
        <p>We offer products such as follows:<strong class="image">please click on the image to view pages found in to make a purchase!</strong></p>
            <a href="Monitor.php" target="_self"><span title="Monitor screens"><img src="./images/images (30).jfif" alt="Monitors" sizes="100" srcset=""></span></a>
            <a href="laptops.php" target="_self"><span title="Laptop devices"><img src="./images/download.jfif" alt="Laptops" sizes="100" srcset=""></span></a>
            <a href="Mouse.php" target="_self"><span title="Mouse devices"><img src="./images/download (10).jfif" alt="Mouse" sizes="100" srcset=""></span></a>
            <a href="phone.php" target="_self"><span title="Mobile phones"><img src="./images/Oppo.jfif" alt="Phones" sizes="10" srcset=""></span></a>
            <a href="" target="_self"><span title="Storage devices"><img src="./images/storage/Lexar 1TB.jpg" alt="Storage devices" sizes="100" srcset=""></span></a>
            <a href="keyboard.php" target="_self"><span title="Keyboard devices"><img src="./images/download.png" alt="Keyboard" sizes="100" srcset=""></span></a>
            <a href="Router.php" target="_self"><span title="Router devices"><img src="./images/images (21).jfif" alt="Router" sizes="100" srcset=""></span></a>
            <a href="Laptopbags.php" target="_self"><span title="Laptop Bags"><img src="./images/download (22).jfif" alt="Laptop Bags" sizes="100" srcset=""></span></a>
            <a href="3D.php" target="_parent"><span title="3D Printers"><img src="./images/3D printer.jpg" alt="3D Printer" sizes="100" srcset=""></span></a>
            <a href="Printer.php" target="_self"><span title="Printing devices"><img src="./images/images (12).jfif" alt="Printer" sizes="100" srcset=""></span></a>
            <a href="" target="_self"><span title="Ethernet cable"><img src="./images/download (5).jfif" alt="Ethernet cable" sizes="100" srcset=""></span></a>
            <a href="info.php" target="_self"><span title="Find out more"><img src="./images/images (50).jfif" alt="infomation" sizes="100" srcset=""></span></a>
            <a href="" target="_self"><span title="Faster Delivery option"><img src="./images/images (3).jfif" alt="Quality display" sizes="100" srcset=""></span></a>
                    <p>Please leave a comment.</p>
            <form action="comment" method="post"> 
                        <textarea rows="2" cols="50" name="comment" placeholder="Leave a comment"></textarea>
                        <input class="save" type="submit" value="Send">
                        </form>
            </section>
    
</body>
</html>
