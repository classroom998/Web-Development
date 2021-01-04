<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> About Us </title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<body>
<?php

include_once "includes/menu.inc";
?>
      <section class="headerTwo">
        
        <div class="aboutme">
            <dl class="details">
              <dt>
                <dd>Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Joel Yeow</dd>
                <dd>Student ID: &nbsp; 103366239</dd>
                <dd>Course: &nbsp; &nbsp; &nbsp; &nbsp; Bachelor of Computer Science</dd>
                <dd>Email:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="mailto:103366239@student.swin.edu.au">103366239@student.swin.edu.au</a></dd>
              
            </dl>
        </div>
        <div>
          <figure class="mypic">
            <img class="selfpic" src="styles/Images/about2.jpg" alt="Joel">
            <figcaption>Joel</figcaption>
          </figure>
        </div>
      </section>  
      <?php
include_once "includes/footer.inc";
?>
</body>
</html>