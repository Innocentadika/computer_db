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
    <title>Mouse page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
    <nav>
        <a href="product.php"class="nav-link">Home</a>

    </nav>
    <script src="main.js"></script>
</head>
<body>
    <p class="user">logged As,</p><?php
        echo $user_data['$user_name'];
?>
    <div class="keyboard">
    <div class="column">
        <img src="./images/download (12).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Dell keyboard</figcaption>
            <figcaption><strong>Ksh.2,000</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">9 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
     <div class="column">
        <img src="./images/download (13).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Lenovo keyboard</figcaption>
            <figcaption><strong>Ksh.2,100</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">10 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
    <div class="column">
        <img src="./images/download (14).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>G-keyboard</figcaption>
            <figcaption><strong>Ksh.1,950</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">5 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
    <div class="column">
        <img src="./images/images (1).png" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Promax keyboard</figcaption>
            <figcaption><strong>Ksh.2,200</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">16 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
     <div class="column">
        <img src="./images/images (6).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Probook keyboard</figcaption>
            <figcaption><strong>Ksh.2,300</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">20 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
     <div class="column">
        <img src="./images/images (30).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>MacDsk keyboard</figcaption>
            <figcaption><strong>Ksh.2,400</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">15 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
     <div class="column">
        <img src="./images/images (38).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Rainbow keyboard</figcaption>
            <figcaption><strong>Ksh.2,300</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">11 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
    <div class="column">
        <img src="./images/images (36).jfif" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Hp Dsk keyboard</figcaption>
            <figcaption><strong><del>Ksh.2,000</del> Ksh.1850</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">15 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
     <div class="column">
        <img src="./images/download.png" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Led keyboard</figcaption>
            <figcaption><strong>Ksh.2,300</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">13 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
     <div class="column">
        <img src="./images/" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>keyboard</figcaption>
            <figcaption><strong>Ksh.3,700</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">10 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
     </div>
     <div class="column">
        <img src="./images/" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>keyboard</figcaption>
            <figcaption><strong>Ksh.3700</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">14 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    <div class="column">
        <img src="./images/" alt="keyboard" sizes="" srcset=""></img>
            <figcaption>Go keyboard</figcaption>
            <figcaption><strong>Ksh.4,400</strong></figcaption>
            <figcaption>Has 1 year warranty</figcaption>
            <figure class="caption">9 units left!</figure>
            <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
    </div>
    </div>
</body>
</html>