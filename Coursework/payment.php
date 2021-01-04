


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
</head>
<body>
<nav>
  <label class="logo">JHosting</label>
</nav>
<section id="payBackground">
    <h2 id="gatewayTitle">Payment Gateway</h2>
    <form id="detailsform" method="POST" action="process_order.php" novalidate="novalidate" >
      <fieldset>
        <legend><strong>Your Enquiries</strong></legend>
        <p>First Name: <input type="text" name="Firstname" id="firstname" readonly></p>
        <p>Last Name: <input type="text" name= "Lastname" id="lastname" readonly></p>
        <p>Email: <input type ="text" name = "email" id="emel" readonly></p>
        <p><strong>Address </strong></p>
        <p>Street: <input type="text" name = "street" id="street" readonly/></p>
        <p>Suburb: <input type="text" name = "suburb" id="suburb" readonly></p>
        <p>State: <input type="text"  name = "state" id="state" readonly></p>
        <p>Postcode: <input type="text" name = "postcode" id="postcode" readonly></p>
        <p>Phone Number <input type="text" name = "phone" id="phone" readonly></p>
        <p><strong>Preferred Contact: </strong></P>
        <p><input type="text" name= "contact" id="contact" readonly></p>
        <p>Product: <input type="text" name = "product"  id="product" readonly></p>
        <p>Product Features: <input type="text" name="Features" id="productFeatures" readonly/></p>
        <p>Price: $<input type="text" name="price" id="productPrice" readonly></p>
        <p>Optional Features: <input type="text" name="optionalFeatures" id="optionalFeatures" readonly></p>
        <p>Duration of Web Hosting: <input type="text" name="duration" id="duration" readonly></p>
        <p>Description: <input type="text" name="description" id="description" readonly></p>

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
            <p id="cards" name="card" >Credit Card<br/>
              
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
</html>
