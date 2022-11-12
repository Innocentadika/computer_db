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
    <title>Laptops Online</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
    
    <nav class="navigation ">
        <a href="product.php" class="nav-link">Home</a>
    </nav>
</head>
<body class="front">

                                        <p class="user">logged as,</p><?php
                     echo $user_data['$user_name'];
                                    ?>
                <hr>
        <h1><center>Laptops</center></h1>
                <hr>
    <div class="column">
        <img src="./images/laptop/IMG-20221026-WA0005.jpg" alt="Laptops" width="250" height="200"></img>
        <figcaption>Hp Lite Core i5</figcaption>
        <figcaption>RAM 8GB ROM 420GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong><del>Ksh.38,000</del> Ksh.31,000</strong></figcaption>
        <figure class="caption">15 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (45).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Probook</figcaption>
        <figcaption>RAM 8GB ROM 320GB</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong><del>Ksh.37,000</del> Ksh.34,000</strong></figcaption>
        <figure class="caption">13 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (46).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption> Hp promax</figcaption>
        <figcaption>RAM 16GB ROM 1TB</figcaption>
        <figcaption><strong>Ksh.55,000</strong></figcaption>
        <figcaption>1 year warranty</figcaption>
        <figure class="caption">21 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/download.jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Mac book Core i7</figcaption>
        <figcaption>RAM 16GB SSD 1TB</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong><del>Ksh.75,000</del> Ksh.70000</strong></figcaption>
        <figcaption>RAM 16GB SSD 1TB</figcaption>
        <figcaption>The grand offers still available just for you.</figcaption>
        <figure class="caption">9 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (48).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp book Core i5</figcaption>
        <figcaption>RAM 8GB ROM 500GB</figcaption>
        <figcaption><strong><del>Ksh.32,000</del> Ksh.29,000</strong></figcaption>
        <figure class="caption">14 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>>
    </div>

    <div class="column">
        <img src="./images/images (49).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Lenovo Core i5</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption><strong>Ksh.35,000</strong></figcaption>
        <figcaption>1 year warranty</figcaption>
        <figure class="caption">15 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/maxim-hopman-Hin-rzhOdWs-unsplash.jpg" alt="Laptops" height="200px" width="250px"></img>
        <figcaption>MacPro</figcaption>
        <figcaption>RAM 8GB ROM 1TB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.50,000</strong></figcaption>
        <figure class="caption">13 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (47).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp ebook core i7</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.53,000</strong></figcaption>
        <figure class="caption">11 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/download (1).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>NewLed LG laptop Core i5</figcaption>
        <figcaption>RAM 8GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong><del>Ksh.47,000</del> Ksh.45,000</strong></figcaption>
        <figure class="caption">20 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (41).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Dragon Core i7</figcaption>
        <figcaption>RAM 16GB SSD 1TB</figcaption>
        <figcaption>Processor 3.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.75,000</strong></figcaption>
        <figure class="caption">12 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/pakata-goh-RDolnHtjVCY-unsplash.jpg" alt="Laptops" height="200px" width="250px"></img>
        <figcaption>Hp SSD For programmer</figcaption>
        <figcaption>RAM 16GB  500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.62,000</strong></figcaption>
        <figure class="caption">13 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (45).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp ProBook Core i3</figcaption>
        <figcaption>RAM 4GB ROM 500GB</figcaption>
        <figcaption>Processor 2.6GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.26,000</strong></figcaption>
        <figure class="caption">12 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (41).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Dragon</figcaption>
        <figcaption>RAM 16GB SSD 1TB</figcaption>
        <figcaption>Processor 3.7GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.75,000</strong></figcaption>
        <figure class="caption">15 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>

    <div class="column">
        <img src="./images/images (44).jfif" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Lite Core i7</figcaption>
        <figcaption>RAM 8GB ROM 500GB</figcaption>
        <figcaption>Processor 3.1GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.40,000</strong></figcaption>
        <figure class="caption">14 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    <div class="column">
        <img src="./images/laptop/Apple 1.jpg" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Apple mac8 IOS  5</figcaption>
        <figcaption>RAM 8GB ROM 1TB</figcaption>
        <figcaption>Processor 3.1GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.70,000</strong></figcaption>
        <figure class="caption">14 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    <div class="column">
        <img src="../images/laptop/Apple 2.jpg" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Gamer Core i7</figcaption>
        <figcaption>RAM 8GB SSD 1TB</figcaption>
        <figcaption>Processor 3.1GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.85,000</strong></figcaption>
        <figure class="caption">11 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    <div class="column">
        <img src="../images/laptop/hp lite5.jpg" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Pavelion Core i7</figcaption>
        <figcaption>RAM 8GB ROM 1TB</figcaption>
        <figcaption>Processor 3.1GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.60,000</strong></figcaption>
        <figure class="caption">14 units left!</figure>
        <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    <div class="column">
        <img src="./images/laptop/Probook 450.jpg" alt="Laptops" sizes="100" srcset=""></img>
        <figcaption>Hp Probook 450</figcaption>
        <figcaption>RAM 8GB ROM 500GB core i5</figcaption>
        <figcaption>Processor 3.1GHZ</figcaption>
        <figcaption>1 year warranty</figcaption>
        <figcaption><strong>Ksh.36,000</strong></figcaption>
        <figure class="caption">14 units left!</figure>
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
</section>

</body>
</html>