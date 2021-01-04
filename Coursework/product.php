<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Products </title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<body>
<?php

include_once "includes/menu.inc";
?>
      <section class="firstSection">
        <section class="sectionImage">
          <h2>Our Offerings</h2>
          <aside>
            <h3> Check out our best plans for your website</h3>
              <ol class="features2">
                <li>Why Us</li>
               <li>Strong Industry Experience</li>
               <li> 24/7 Support</li>
               <li>30 Days - Money Back Guarantee</li>
             </ol>
             <div class="sample">
              <figure class="product1">
                <img class="productsample" src = "styles/Images/product.jpg" alt="Sample Website">
               
              </figure>
            </div>
             
             
          </aside>
         
          <ul class="features">
             <li>Optional Features</li>
            <li>Multiple IP addresses</li>
            <li> Web Analytics</li>
            <li> Spam Protection</li>
           
          </ul>
        
          <table >
            <tr class="planType"> 
              <th>Basic</th>
              <th> Premium </th>
              <th> Ultimate</th>
            </tr>
            <tr>
              <th>FREE Domain</th>
              <th>FREE Domain</th>
              <th>FREE Domain</th>
            </tr>
            <tr>
              <th>FREE Domain</th>
              <th>FREE Domain</th>
              <th>FREE Domain</th>
            </tr>
            <tr>
              <th>100 GB storage</th>
              <th> 2TB storage</th>
              <th>UNLIMITED storage</th>
            </tr>
            <tr>
              <th>No SSL certificate</th>
              <th>SSL Certificate</th>
              <th>SSL CERTIFICATE</th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th>Advance Secure+</th>
            </tr>
          </table>
        </section>
        
      </section>
      <?php
include_once "includes/footer.inc";
?>
</body>
</html>