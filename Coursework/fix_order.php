<?php
    session_start();
   
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Payment </title>
    <link href="styles/styles.css" rel="stylesheet"/>
    <script src="scripts/FinalPaymentValidation.js"></script>
    <script src="scripts/enquireValidate.js"></script>
</head>
<body>
<nav>
  <label class="logo">JHosting</label>
</nav>
<section id="payBackground">
    <h2 id="gatewayTitle">Fix Order Details</h2>
    <form id="detailsform" method="POST" action="process_order.php" novalidate="novalidate" >
      <fieldset>
        
        <legend><strong>Your Enquiries</strong></legend>
        <p> <?php echo  $_SESSION["errMsg"]; ?> </p>
        <p>First Name: <input type="text" name = "Firstname" id="firstname" value = "<?php echo  $_SESSION["Firstname"];?>" ></p>
        <p>Last Name: <input type="text" name = "Lastname" id="lastname"  value = "<?php echo  $_SESSION["Lastname"];?>"> </p>
        <p>Email: <input type ="text" name = "email" id="emel" value = "<?php echo $_SESSION["email"];?>">  </p>
        <p><strong>Address </strong></p>
        <p>Street: <input type="text" name = "street" id="street" value = "<?php echo $_SESSION["street"];?>" /></p>
        <p>Suburb: <input type="text" name = "suburb" id="suburb" value = "<?php echo $_SESSION["suburb"];?>" ></p>
         <p>State: <input type="text"  name = "state" id="state" value = "<?php echo $_SESSION["state"];?>" ></p>
        <!--<p><label for="state"> State (If applicable to change) </label> 
                  <select name="state" id="state"  >
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
              </p>-->
        <p>Postcode: <input type="text" name = "postcode" id="postcode" value = "<?php echo $_SESSION["postcode"];?>"  ></p>
        <p>Phone Number <input type="text" name = "phone" id="phone" value = "<?php echo $_SESSION["phone"];?>"></p>
         <p><strong>Preferred Contact: </strong></p>
         <p><input type="text" name= "contact"id="contact" value = "<?php echo $_SESSION["contact"];?>"></p>
       
       
        <p>Product: <input type="text" name = "product"  id="product" value="<?php  echo $_SESSION["product"] ?>" ></p>
        <p>Product Features: <input type="text" name="Features" id="productFeatures" value="<?php echo $_SESSION["Features"]?>"/></p>
        <p>Price: <input type="text" name="price" id="productPrice" value="<?php echo  $_SESSION["price"]?>"></p>
        <p>Optional Features: <input type="text" name="optionalFeatures" id="optionalFeatures" value="<?php echo $_SESSION["optionalFeatures"]?>" ></p>
        <p>Duration of Web Hosting: <input type="text" name="duration" id="duration" value="<?php echo $_SESSION["duration"]?>" ></p>
        <p>Description: <input type="text" name="description" id="description" value="<?php echo $_SESSION["description"]?>" ></p>

       <!-- <input type="hidden" name="firstname" id="firstname" />
        <input type="hidden" name="lastname" id="lastname" />
        <input type="hidden" name="email" id="emel" />
        <input type="hidden" name="street" id="street" />
        <input type="hidden" name="state" id="state" />
        <input type="hidden" name="postcode" id="postcode" />
        <input type="hidden" name="contact" id="contact" />
        <input type="hidden" name="product" id="product" />
        <input type="hidden" name="productFeatures" id="productFeatures" />
        <input type="hidden" name="price" id="price" />
        <input type="hidden" name="optionalFeatures" id="optionalFeatures" />
        <input type="hidden" name="webHostDuration" id="webHostDuration" />
        <input type="hidden" name="addInfo" id="addInfo" />-->
        
        
       


        <br>
   
      
          <legend><strong>Payment Details</strong></strong></legend>
        <br/>
            <p id="cards" >Credit Card<br/>
              
              <label><input type="radio" id = "visa" name="card" value="visa" />Visa</label> <br/>
              <label><input type="radio" id = "mastercard" name="card" value="mastercard" />Mastercard</label> <br/>
              <label><input type="radio" id = "amex" name="card" value="amex" />American Express</label>
            
            </p>
            <p><label for="Name">Name</label>
               <input type="text" name= "Name" id="cName" maxlength="40" required="required"/>
              </p>

            <p><label for="Number">Number</label>
               <input type="text" name= "Number" id="cNumber" maxlength="16" required="required" />
              </p>

            <p><label for="ExpiryDate"> Expiry Date</label>
               <input type="text" name= "ExpiryDate" id="cExpiryDate" maxlength="5"   placeholder="mm/yy" required = "required"/>
              </p>

            <p><label for="cvv">CVV</label>
               <input type="text" name= "cvv" id="cvv" maxlength="3" required = "required" /></p>
              </fieldset>
        
        <button type="submit" value="Submit" id="payButton">Check Out</button>
        <button type="button" value="Cancel Order" id="cancelButton">Cancel Order</button>
    </form>
      
   
   
</section>

 



<?php
include_once "includes/footer.inc";
?>
</body>

<?php session_destroy(); ?>
</html>
