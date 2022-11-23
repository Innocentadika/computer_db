<?php
session_start();

include("connection.php");
include("function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information center </title>
    <link rel="shortcut icon" href="./images/istockphoto-1165295579-170x170.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 
    
    
        <center> <img src="./images/my page.jpg" alt="" sizes="200" srcset="" class="font"></center>
            <p>Welcome dear customer, your privacy our priority.</p>
            <p>Hello, my name is <strong><em>Innocent Mukovwa.</em></strong> Welcome to my website, we've accessories at an affordable prices to get.</p>
            <p>This website aims at eradicating the shop to shop movement by a customer which can become somehow tiresome and expensive.</p>
            <p>This will create an enabling environment for every customer to make a purchase within the country regardless of the place of stay.</p>
            <p>Therefore a standard digital plaform as others operating across the globe.</p>
        <center><video controls src="./images/stock-footage-happy-people-using-smartphone-devices-in-world-wide-connected-social-network-diverse-people-do-e.webm" type="video/mp4" autoplay>Video not supported</video></center>
    <p><strong>Why trust us?</strong> We have partnership with trusted manufacturing companies, who provide us with quality products.</p>
    
    <p><strong><em>ALL OUR DEVICES</em></strong> i.e computers are planted in with Antivirus coz we're here for you.</p>
        <img src="./images/download (15).jfif" alt="antivirus software">
        <img src="./images/download (16).jfif" alt="antivirus software">

    <p>Our platforms offers a <strong><u>one year warranty</u></strong> to our products for change depending on the type of failure.</p>
    <p>We provide guidance to our customers incase of anything concerned with our products through our helpline numbers.</p>

    <p><u><strong><em>Reach us on:</em></strong></u><strong class="image">Click on the icon!</strong></p>
    <ul>
        <li><a href="tel:+254703618170" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});" class="fa fa-phone">safaricom 0703618170</a>  & 
            <a href="tel:+254738291518" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});" class="fa fa-phone">airtel 0738291518</a></li>
        <li><a href="https://www.facebook.com/innocent.allan.50" class="fa fa-facebook">acebook.</a></li>
        <li><a href="https://www.instagram.com/innolyster/" class="fa fa-instagram">instagram.</a></li>
        <li><a href="#" class="fa fa-whatsapp">whatsapp.</a> </li>
        <li><a href="#" class="fa fa-twitter">twitter.</a> </li>
    </ul>
        <p>We've had customer satisfaction feedback and we also value yours. We're dedicated to giving an immediate response 24/7.</p>
                                        <center>
        <video controls src="./images/handsome-happy-young-businessman-talking-on-mobile-phone-outdoors-video.mp4" Volmax="15" Volmin="0" type="video/mp4" autoplay>Video not supported</video>
                                        </center>
            
    <p>your Comment to the website and product matters; we're here to serve you.</p>
         <form action="comment.php" method="post">
    <textarea rows="2" cols="50" name="comment" placeholder="Leave a comment"></textarea>
    <input class="save" type="submit" value="Send">
         </form>
    
</body>
</html>