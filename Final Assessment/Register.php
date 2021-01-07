<!--filename: [Register.php] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to Register
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> About Us </title>
    <link href="styles/styles.css" rel="stylesheet"/>
    <script src="scripts/register_validate.js" > </script>
</head>

<?php

include_once "includes/menu.inc";
?>

<div class="register_background">
 

  <section class="sem1">
  <div class="register_container">
  <h1>Seminar Registration</h1>



  <form id="RegisterForm" method="POST"  action="Process.php" novalidate="novalidate" >
          <fieldset>
         
          <p>
          <label for="refnumber">Seminar Reference Number</label> 
          <input type="text" name= "refnumber" id="refnumber" /> &nbsp;
          </p>

          <p>
          <label for="username">Username</label> 
          <input type="text" name= "username" id="username"/>
          </p>
          
          <p><label for="qualification"> Qualification</label> 
              <input type="radio" id="undergraduate" name="qualification" value = "undergraduate" >Undergraduate</option>
             <input type="radio" id="graduate" name="qualification" value="graduate ">Graduate</option>			
           </p>

          <p>
          <label for="roles"> Roles</label> 
          <select name="roles" id="roles" >
                      <option value = "" >Please Select</option>
                      <option value="Organiser"> Organiser</option>
                      <option value="Participant"  >Participant</option>			
                  </select>

          </p>  

           <p>
          <label for="email">Email</label> 
          <input type="email" name="email" id="email"  required="required" />
          </p>

          <p><label for="phone">Phone Number</label> 
           <input type="text" name="phone" id="phone">              
          </p>
                              
        </fieldset>

      <input type="submit" class="register_button" value="Register Now"/>
 
  
  </form>

  </div>

      
      
</section>


  </div>









     
<?php
include_once "includes/footer.inc";
?>

</html>