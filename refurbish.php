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
    <title>Refurbished Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">

    
</head>
<body class="desktop">
    <p class="user">logged as,</p><?php
        echo $user_data['$user_name'];
?>
    <hr>
            
                    <h1><center>Desktop Monitors</center></h1>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 400 G6 MT core i5.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Hp prodesk 400 G6 MT core i5</figcaption>
                    <figcaption><strong>Ksh.21,500</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">15 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 500 G1.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Hp prodesk 500 G1</figcaption>
                    <figcaption><strong>Ksh.23,500</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">5 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 600 G1.jpg" alt="Laptops" sizes="100" srcset=""></img>
                    <figcaption>Hp prodesk 600 G1</figcaption>
                    <figcaption><strong>Ksh.27,000</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">5 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 600 G2.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Hp prodesk 600 G2</figcaption>
                    <figcaption><strong>Ksh.23,500</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">11 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hpr prodesk Business.jpg" alt="Desktop Monitor" height="200" width="250"></img>
                    <figcaption>Hpr prodesk Business</figcaption>
                    <figcaption><strong>Ksh.26,500</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">10 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/download (8).jfif" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>hp 43</figcaption>
                    <figcaption><strong>Ksh.10,000</strong></figcaption>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figure class="caption">9 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>

            <hr>
            <h1><center>Laptops</center></h1>
                <hr>
    <div class="column">
        <img src="./images/laptop/IMG-20221026-WA0005.jpg" alt="Laptops" width="250" height="200"></img>
        <figcaption>Hp Lite Core i5</figcaption>
        <figcaption>RAM 8GB ROM 420GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>Refurbished</figcaption>
        <figcaption><strong>Ksh.21,000</strong></figcaption>
        <figure class="caption">5 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (45).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Probook</figcaption>
        <figcaption>RAM 8GB ROM 320GB</figcaption>
        <figcaption>Refurbished</figcaption>
        <figcaption><strong>Ksh.23,000</strong></figcaption>
        <figure class="caption">8 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (46).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption> Hp promax</figcaption>
        <figcaption>RAM 16GB ROM 1TB</figcaption>
        <figcaption><strong>Ksh.35,000</strong></figcaption>
        <figcaption>Refurbished</figcaption>
        <figure class="caption">10 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (5).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp 360 Core i5</figcaption>
        <figcaption>Touch sensitive</figcaption>
        <figcaption>RAM 8GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.29,000</strong></figcaption>
        <figure class="caption">10 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/download (24).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp proLite Core i3</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.20,000</strong></figcaption>
        <figure class="caption">6 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (2).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Dell laptop Core i3</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.15,000</strong></figcaption>
        <figure class="caption">9 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
        <div class="column">
        <img src="./images/images (43).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Accer Core i3</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.19,000</strong></figcaption>
        <figure class="caption">5 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/anete-lusina-zwsHjakE_iI-unsplash.jpg" alt="Laptops" height="200" width="250"></img>
        <figcaption>Hp Promax Core i5</figcaption>
        <figcaption>RAM 8GB ROM 500GB</figcaption>
        <figcaption>Processor 3.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.27,000</strong></figcaption>
        <figure class="caption">8 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (2).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Dell laptop Core i3</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Refurbished items</strong></figcaption>
        <figcaption><strong>Ksh.17,500</strong></figcaption>
        <figure class="caption">7 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <center><h1>Printers</h1></center>
                        <hr>
        <div class="column">
                        <img src="./images/download (2).jfif" alt="Printers" sizes="" srcset=""></img>
                        <figcaption>Epson L386</figcaption>
                        <figcaption><strong>Ksh.24,000</strong></figcaption>
                        <figcaption><em>Plus 1 Free ink set</em></figcaption>
                        <figcaption>cable use/ internet connection based</figcaption>
                        <figure class="caption">9 units left!</figure>
                        <figcaption><strong>Refurbished</strong></figcaption>
                        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                        <img src="./images/images (8).jfif" alt="Printers" sizes="" srcset=""></img>
                        <figcaption>Canon Pixma</figcaption>
                        <figcaption><strong>Ksh.19,950</strong></figcaption>
                        <figcaption>cable use/ internet connection based</figcaption>
                        <figure class="caption">6 units left!</figure>
                        <figcaption><strong>Refurbished</strong></figcaption>
                        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                    <img src="./images/images (12).jfif" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Kings PrintV9.1.3</figcaption>
                    <figcaption><strong>Ksh.35,999</strong></figcaption>
                    <figcaption>Prints many copies at ago. Plus Free ink set</figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figure class="caption">4 units left!</figure>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                    <img src="./images/images (11).jfif" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Office L026</figcaption>
                    <figcaption><strong><del>Ksh.21,400</del>Ksh.29,000</strong></figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figure class="caption">14 units left!</figure>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
        <div class="column">
                    <img src="./images/download (2).jfif" alt="Printers" sizes="" srcset=""></img>
                    <figcaption>Epson L386</figcaption>
                    <figcaption><strong>Ksh.21,000</strong></figcaption>
                    <figcaption>cable use/ internet connection based</figcaption>
                    <figure class="caption">5 units left !</figure>
                    <figcaption><strong>Refurbished</strong></figcaption>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
        </div>
<hr>

                
</body>
</html>