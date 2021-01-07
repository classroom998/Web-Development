<!--filename: [index.php] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to index
-->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Final Assessment - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Home Page </title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>


<?php
include_once "includes/index_menu.inc";
?>


<div class="background">
 

  <section class="sem1">
  <div class="container1">
  <h1 class="index_h1">The Economy of Post-Covid 19</h1>
  <h3 id="ref_number1" value="S00001">Reference Number: #S00001 </h3>
  <p>  In a world of volatile environments, job security is a major concern. 
       Come and join this seminar <br> of how to re-innovate yourself and stand out to companies and employers. <br> We have industry experts and career counselors to 
       guide you. <br>Limited seats. Join us quickly </p>

       <br>

       <form method="POST" action="Register.php">
        <button type="submit" class="button_sem1">Apply Now!</button>
        </form>

       </div>

      
      
</section>



<section class="sem2"> 
  <div class="container2">
  <h1 class="index_h1">Mental Health during Covid 19</h1>
  <h3 id="ref_number2" value="S00002" >Reference Number: #S00002 </h3>
  <p>  Mental health is a bug issue in today's society. Even worse, during COVID-19 when people have lost their jobs <br>
       and are locked inside the house for more than a month. Depression, anxiety, and other mental illness are real. Join us <br> in learning 
       how to deal with mental helath issues. Our invited panel of world-renowned psychologists will be there to answer your questions. <br>
        Limited seats available </p>
        <br>
        <form method="POST" action="Register.php">
        <button type="submit" class="button_sem2">Apply Now!</button>
        </form>
</div>
</section>
  </div>





 


<?php
include_once "includes/footer.inc";
?>

</html>
