




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Enquire </title>
    <link href="styles/styles.css" rel="stylesheet"/>
    <script src="scripts/enquireValidate.js"></script>
   
</head>
<body>
<?php

include_once "includes/menu.inc";
?>
    <section class="secondsection"> 
      <section class="sectionImage2">
        <form id="enquireForm" method="POST"  action="payment.php" novalidate="novalidate" >
          <fieldset>
          <legend> Enquiries </legend>
          <p>
          <label for="firstname">First Name</label> 
          <input type="text" name= "Firstname" id="firstname" pattern="[A-Z][a-z]" maxlength="25"/> &nbsp;
         
        
          <label for="lastname">Last Name</label> 
          <input type="text" name= "Lastname" id="lastname" pattern="[A-Z][a-z]" maxlength="25" />
          
          
          <label for="email">Email</label> 
          <input type="email" name="email" id="emel"  required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
          </p>
          
          <br>
          
          <label> Address</label> <br>
          <label for="street">Street Address</label> 
          <input type="text" name= "street" id="street"  maxlength="40"  required="required" /> 
          <label for="suburb">Suburb/Town</label> 
          <input type="text" name= "suburb" id="suburb"  maxlength="50"  required="required" />
          
              <p><label for="state"> State </label> 
                  <select name="state" id="state" required="required" >
                      <option value = "" >Please Select</option>
                      <option value="VIC"  >VIC</option>			
                      <option value="NSW"> NSW</option>
                      <option value="QLD">QLD</option>
                      <option value= "NT">NT</option>
                      <option value="WA">WA</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                      <option value="ACT">ACT</option>
                  </select>
              </p>
              <label for="postcode">Postcode</label> 
          <input type="text" name= "postcode" id="postcode"  maxlength="4"  required="required" /> 	
          <label for="phone">Phone Number</label> 
          <input type="text" name= "phone" id="phone"  maxlength="10"  required="required" placeholder="011-2676217"/> 
              
          <br>
          <label> Preferred Contact</label> 
			<p id="contact"><label for="email"> Email </label> 
                <input type="radio" id="email" name="contact" value="Email" required="required"/> &nbsp;
                <label for="post"> Post</label> 
                <input type="radio" id="post" name="contact" value="Post"/>
                <label for="handphone"> Phone </label> 
				<input type="radio" id="handphone" name="contact" value="Phone"/>
            </p>

            <p><label for="product"> Product</label> 
              <select name="product" id="product" >
                  <option value = "" >Please Select</option>
                  <option value="basic">Basic</option>			
                  <option value="premium"> Premium</option>
                  <option value="ultimate">Ultimate</option>
            </select>
            </p>
            


                  <label> Product Features </label> <br>
                  <p id="feature"><label for="domain" >Domain</label> 
                            <input type="checkbox" id="domain" name="domain" value="Domain" /> &nbsp;
                            <label for="storage">Storage</label> 
                            <input type="checkbox" id="storage" name="storage" value="Storage" /> &nbsp;
                            <label for="certificate">SSL Certificate</label> 
                            <input type="checkbox" id="certificate" name="certificate" value=" SSL Certificate" /> &nbsp;
                            <label for="secure">Advance Secure+</label> 
                            <input type="checkbox" id="secure" name="secure" value=" Adance Secure+" /> &nbsp;
                             
                        </p>

                        <p><label for="price">Price</label> 
                          <select name="productPrice" id="productPrice" required="required">
                              <option value = "" >Please Select</option>
                              <option value="Basic ($20/ month)">Basic ($20/ month)</option>			
                              <option value="Premium ($40/ month)"> Premium ($40/ month)</option>
                              <option value="Ultimate ($80/ month)">Ultimate ($80/ month)</option>
                        </select>
                        </p>
                        <p><label for="optionalFeatures"> Optional Features</label> 
                          <select name="addOptions" id="addOptions">
                            <option value = "" >If Applicable</option>
                              <option value="Multiple IP Addresses ">Multiple IP addresses ($10/ month)</option>			
                              <option value=" Web Analytics"> Web Analytics ($10/ month)</option>
                              <option value=" Spam Protection">Spam Protection ($10/ month)</option>
                        </select>
                        </p>

                        <p><label for="webhost_Duration"> Duration of Web Hosting</label> 
                          <input type="text" name="duration" id="duration">
                          
                        </p>
                    
                        <label for="description"> Description  </label>
                        <br>
                        <textarea id="description" name="description" rows="6" cols = "45" placeholder=" Write description of interested aspect/feature"></textarea>

        </fieldset>
  
        
  
  
          
  
      <input type="submit" value="Pay Now"/>
    <input type= "reset" value="Reset Form"/>
  
  </form>
      </section>

    </section>
    <?php
include_once "includes/footer.inc";
?>
</body>
</html>