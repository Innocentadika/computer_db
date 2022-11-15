<?php
session_start();

include("connection.php");
include("function.php");

$user_data= check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer page</title>
    <link rel="stylesheet" href="style.css">
    
      <script src="main.js"></script>
</head>
<body>
    <nav class="navigation">
        <a href="product.php"class="nav-link">Home</a>

    </nav>
            <hr>
        <Strong>
            <center><p>Welcome to Printers section. Here we offer quality Printers producing quality ideas.</p></center>
            <center><p>Our printers are digital printing ideas in form of plastic objects .</p></center>
            <center><p>We also sale printing materials incase you need after yours is used up.</p></center>
            <center><p>Our printers are energy savers and wirelessly connected via Raspribery pi</p></center>

        </Strong>
            <div class="Bags">
        <div class="column">
                <img src="./images/images (9).jfif" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Kings 3D P9.1.3</figcaption>
                    <figcaption><strong>Ksh.110,000</strong></figcaption>
                    <figcaption>Prints ideas to real objects</figcaption>
                    <figcaption>Very reliable to showcase ideas</figcaption>
                    <figcaption><strong>+ 1 year warranty</strong></figcaption>
                    <figure class="caption">4 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>            
        <div class="column">
        <img src="./images/" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>3D Grand for shoes</figcaption>
                    <figcaption><strong>Ksh.53,000</strong></figcaption>
                    <figcaption>Prints many copies at ago. Plus Free ink set</figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figcaption><strong>+ 1 year warranty</strong></figcaption>
                    <figure class="caption">9 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                <img src="./images/" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Canon Pixma for clothes</figcaption>
                    <figcaption><strong>Ksh.46,000</strong></figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figcaption><strong>+ 1 year warranty</strong></figcaption>
                    <figure class="caption">4 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                <img src="./images/3D printer.jpg" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Conon Lx for burners</figcaption>
                    <figcaption><strong>Ksh.69,499</strong></figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figcaption><strong>+ 1 year warranty</strong></figcaption>
                    <figure class="caption">8 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
         </div>
                
                    
            </div>
    </body>
</html>