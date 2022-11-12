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
    <nav class="navigation ">
        <a href="product.php" class="nav-link">Home</a>
    </nav>
        <script src="main.js"></script>
</head>
<body class="mouse">
    
    <p class="user">logged as,</p><?php
        echo $user_data['$user_name'];
?>
    <hr>
<div class="column">
    <img src="./images/download (10).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Black horse</figcaption>
    <figcaption><strong>Ksh.650</strong></figcaption>
    <figcaption>3 hours lifespan</figcaption>
    <figure class="caption">11 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (33).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Maroon Wireless</figcaption>
    <figcaption><strong>Ksh.450</strong></figcaption>
    <figcaption>2 hours lifespan</figcaption>
    <figure class="caption">18 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

 <div class="column">
    <img src="./images/images (32).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Black<em>logi</em> Wireless</figcaption>
    <figcaption><strong>Ksh.850</strong></figcaption>
    <figcaption>4 hours lifespan</figcaption>
    <figure class="caption">8 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (31).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Delta Mouse</figcaption>
    <figcaption><strong>Ksh.600</strong></figcaption>
    <figcaption>5 hours lifespan</figcaption>
    <figure class="caption">21 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="../images/mouse/mouse1.jpg" alt="Mouse" width="300" height="200" srcset=""></img>
    <figcaption>Classic M</figcaption>
    <figcaption><strong>Ksh.650</strong></figcaption>
    <figcaption>4 hours lifespan</figcaption>
    <figure class="caption">23 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (35).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>White Ant</figcaption>
    <figcaption><strong>Ksh.699</strong></figcaption>
    <figcaption>4 hours lifespan</figcaption>
    <figure class="caption">11 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (37).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Black Spider</figcaption>
    <figcaption><strong>Ksh.599</strong></figcaption>
    <figure class="caption">13 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

    <div class="column">
    <img src="./images/download (11).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Grey Rat</figcaption>
    <figcaption><strong>Ksh.350</strong></figcaption>
    <figure class="caption">15 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (36).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Black Tick</figcaption>
    <figcaption><strong>Ksh.600</strong></figcaption>
    <figcaption>5 hours lifespan</figcaption>
    <figure class="caption">9 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

<div class="column">
    <img src="./images/images (34).jfif" alt="Mouse" sizes="" srcset=""></img>
    <figcaption>Classic yellow</figcaption>
    <figcaption><strong>Ksh.600</strong></figcaption>
    <figcaption>3 hours lifespan</figcaption>
    <figure class="caption">23 units left!</figure>
    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
</div>

    
</body>
</html>