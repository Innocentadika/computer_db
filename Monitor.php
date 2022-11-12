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

    <nav class="navigation">
        <a href="product.php" class="nav-link">Home</a>
    </nav>
                <script src="main.js"></script>

</head>
<body class="desktop">
    <p class="user">logged as,</p><?php
        echo $user_data['$user_name'];
?>
    <hr>
                <img class="New laptop">
            
                    <h1><center>Desktop Monitors</center></h1>
            <div class="column">
            
                    <img src="./images/Desktop/Dell.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Dell 43 inch</figcaption>
                    <figcaption><strong><del>Ksh.23,000</del> Ksh.21,000</strong></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figure class="caption">9 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 1.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Apple 32 inc</figcaption>
                    <figcaption><strong><del>Ksh.37,000</del> Ksh.34,999</strong></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figure class="caption">17 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/PNG laptop.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Hp 32 inch screen</figcaption>
                    <figcaption><strong>Ksh.30,000</strong></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.23,000</strong></figcaption>
                    <figure class="caption">7 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/images (30).jfif" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Mac 32 inch</figcaption>
                    <figcaption><strong><del>Ksh.35,000</del>Ksh.32,000</strong></figcaption>
                    <figcaption>The grand offers still available just for you.</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figure class="caption">17 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/images (29).jfif" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Apple 16 inch</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.23,000</strong></figcaption>
                    <figure class="caption">17 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 2.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Apple 24 inch</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.27,200</strong></figcaption>
                    <figure class="caption">13 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp qssistencia.jpg" alt="Desktop Monitor" height="200px" width="250px"></img>
                    <figcaption>Hp assistencia</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.28,000</strong></figcaption>
                    <figure class="caption">11 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 3.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.43,000</strong></figcaption>
                    <figure class="caption">17 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 400 G3.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Hp prodesk 400 G3</figcaption>
                    <figcaption><strong><del>Ksh.34,000</del> Ksh.30,500</strong></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figure class="caption">25 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 3.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption></figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.52,000</strong></figcaption>
                    <figure class="caption">17 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Hp prodesk 400 G5 I5.jpg" alt="Desktop Monitor" height="200px" width="250px"></img>
                    <figcaption>Hp prodesk 400 G5 I5</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.34,000</strong></figcaption>
                    <figure class="caption">20 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 4.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Apple mac 5</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.55,000</strong></figcaption>
                    <figure class="caption">14 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
            <div class="column">
                    <img src="./images/Desktop/Desktop Apple 5.jpg" alt="Desktop Monitor" sizes="100" srcset=""></img>
                    <figcaption>Apple mac 6</figcaption>
                    <figcaption><strong>1 year warrant</strong></figcaption>
                    <figcaption><strong>Ksh.57,000</strong></figcaption>
                    <figure class="caption">12 units left!</figure>
                    <figcaption><button>Add to Cart</button><a href="tel:254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><span title="call the saler"><button class="call">CALL</button></span></a></figcaption>
            </div>
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

                </div>
</body>
</html>