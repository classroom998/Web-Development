
<?php
session_start();
    //Data Validation for Enquire Page
    
    //POST Variables
        $firstname = $_POST["Firstname"];
        $lastname = $_POST["Lastname"];
        $email = $_POST["email"];
        $street = $_POST["street"];
        $suburb = $_POST["suburb"];
        $state = $_POST["state"];
        $postcode = $_POST["postcode"];
        $phone = $_POST["phone"];
        $contactType = $_POST["contact"];
        $product = $_POST["product"];
        $feature = $_POST["Features"];
        $price = $_POST["price"];
        $optionFeature = $_POST["optionalFeatures"];
        $duration = $_POST["duration"];
        $description = $_POST["description"];

        // Credit Card Details
        $card = $_POST["card"];
        $cardName = $_POST["Name"];
        $cardNumber = $_POST["Number"];
        $cardExpiry = $_POST["ExpiryDate"];
        $cardCVV = $_POST["cvv"];


        //echo $_SESSION["Firstname"];
        /*echo $feature;
        echo  $contactType;
        echo  $price;
        echo   $optionFeature;
        echo $duration;
        echo  $_SESSION["phone"];
        echo $card;
        echo $cardNumber;
        echo $cardName;
        echo $cardExpiry;
        echo $cardCVV;
        echo  $_SESSION["state"];*/
   
      

    //End of POST variables


    //SESSION variables
    $_SESSION["Firstname"] = $firstname ;
    $_SESSION["Lastname"] = $lastname ;
    $_SESSION["email"] =  $email ;
    $_SESSION["street"] =  $street  ;
    $_SESSION["suburb"] = $suburb ;
    $_SESSION["state"] = $state ;
    $_SESSION["postcode"] =  $postcode ;
    $_SESSION["phone"] =    $phone ;
    $_SESSION["contact"]= $contactType ;
    $_SESSION["product"] = $product ;
    $_SESSION["Features"] = $feature ;
    $_SESSION["price"] = $price;
    $_SESSION["optionalFeatures"] = $optionFeature ;
    $_SESSION["duration"] = $duration;
    $_SESSION["description"] = $description ;

     // Credit Card Details
    $_SESSION["card"] =  $card ;
    $_SESSION["Name"] = $cardName  ;
    $_SESSION["Number"] =  $cardNumber ;
    $_SESSION["ExpiryDate"] =$cardExpiry ;
    $_SESSION["cvv"] = $cardCVV ;

    $errMsg = "";

   
    //End of SESSION variables


         //Database Function
         function database()
         {
             include_once ('includes/Database.php');
            
         }
         /*function StoreCustomerDetails()
         {
            include_once ('includes/CustomerDetails.php');
         }*/

         function sanitise_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(($_POST["Firstname"]) && (!preg_match("/^[a-zA-Z]+$/" , $firstname)))
        {
            $errMsg .= "First name has to be alphabets \n";
            //$firstname = sanitise_input($firstname);
           
        }
        if (($_POST["Lastname"]) && (!preg_match("/^[a-zA-Z]+$/" , $lastname)))
        {
            $errMsg .= "Last name has to be alphabets\n";
            //$lastname = sanitise_input($lastname);
       
        }
        
        if(($_POST["email"]) && (!filter_var($email, FILTER_VALIDATE_EMAIL)))
        {
            $errMsg .= "Invalid email format\n"; 
            header("location: fix_order.php");
        }
        
        if ($_POST["product"] == "") 
        {
            
            $errMsg .= "A product must be selected\n";
            $product = sanitise_input($product); 
           
        }
       
       
        
        if ($_POST["duration"] < 0) 
        {
            $errMsg .= "The product duration must be a positive integer\n";
            $duration = sanitise_input($duration); 
          
        }
        if ($_POST["duration"] =="") 
        {
            $errMsg .= "The product duration must be filled in";
            $duration = sanitise_input($duration); 
           
        }
             //State Validation
       if($_POST["state"] == "")
       {
           
           $errMsg .= "Please select a state";  
       }
     
       if (($state == "VIC") && (! preg_match("/^(3|8)[0-9]{3}$/" , $postcode))) 
       {
           $errMsg .= "VIC can only be with postcode starting with 3 or 8\n";
         $state = sanitise_input($state); 
         $postcode = sanitise_input($postcode); 
      }

       if(($state=="NSW")&&(!preg_match("/^(1|2)[0-9]{3}$/" , $postcode)))  {
           $errMsg = "NSW can only be with postcode starting with 1 or 2\n";
           $state = sanitise_input($state); 
           $postcode = sanitise_input($postcode); 
       
       }
        if (($state=="QLD")&& (!preg_match("/^(4|9)[0-9]{3}$/", $postcode)))
       {
           $errMsg = "QLD can only be with postcode starting with 4 or 9\n";
           $state = sanitise_input($state); 
           $postcode = sanitise_input($postcode); 
           
       }
      
        if (($state=="NT")&&(!preg_match("/^[0][0-9]{3}$/", $postcode))) 
       {
           echo "NT can only be with postcode starting with 0\n";
           $state = sanitise_input($state); 
           $postcode = sanitise_input($postcode); 
    
       }
       if (($state=="WA")&&(!preg_match("/^[6][0-9]{3}$/", $postcode)))
       {
            echo "WA can only be with postcode starting with 6\n";
            $state = sanitise_input($state); 
            $postcode = sanitise_input($postcode); 
          
       }
        if (($state=="SA")&&(!preg_match("/^[5][0-9]{3}$/", $postcode)))
        {
           echo "SA can only be with postcode starting with 5\n";
           $state = sanitise_input($state); 
           $postcode = sanitise_input($postcode); 
         
       }
        if (($state=="TAS")&&(!preg_match("/^[7][0-9]{3}/", $postcode)))
       {
       echo "TAS can only be with postcode starting with 7\n";
       $state = sanitise_input($state); 
       $postcode = sanitise_input($postcode); 
    
       }
        if (($state== " ACT")&&(!preg_match("/^[0][0-9]{3}$/", $postcode)))
       {
           echo "ACT can only be with postcode starting with 0\n";
           $state = sanitise_input($state); 
           $postcode = sanitise_input($postcode); 
     
       }

       //End of State Validation
        
        //Credit Card Validation

        if($_POST["Name"] == "")
         {
            $errMsg .= "Please enter a name ";
            $cardName = sanitise_input($cardName);
           
            
        } 
    
        if($cardName > 40) {
            $errMsg = "The maximum length of the name is 40 characters\n";
            $cardName = sanitise_input($cardName);
        
        } 
        if($_POST["ExpiryDate"] == "")
        {
           $errMsg .=  "Please enter a valid expiry date \n";
           $cardExpiry = sanitise_input($cardExpiry);
       
       
        }
        if(($card =="amex") && (!preg_match("/^(34|37)[0-9]{13}$/", $cardNumber)))
        {
            $errMsg .= "Invalid card number\n Please enter a 15 digit AMEX again starting with 34/37 \n";
        }
        if(($card =="visa") && (!preg_match("/^[4]{1}[0-9]{15}$/", $cardNumber))) 
        {
            $errMsg .= "Invalid card number\n Please enter a 16 digit Visa again starting with 4 \n";
        }
        if(($card =="mastercard") && (!preg_match("/^5[1-5][0-9]{14}$/", $cardNumber))) 
        {
            $errMsg .= "Invalid card number\n Please enter a 16 digit Mastercard again starting from 51-55 \n";
        }

        //End of Credit Card Validation







        if($errMsg != "")
        {
            /*$_SESSION["Firstname"] = $firstname ;
            $_SESSION["Lastname"] = $lastname ;
            $_SESSION["email"] =  $email ;
            $_SESSION["street"] =  $street  ;
            $_SESSION["suburb"] = $suburb ;
            $_SESSION["state"] = $state;
            $_SESSION["postcode"] =  $postcode ;
            $_SESSION["phone"] =    $phone ;
            $_SESSION["contact"]= $contactType ;
            $_SESSION["product"] = $product ;
            $_SESSION["Features"] = $feature ;
            $_SESSION["price"] =  $price ;
            $_SESSION["addOptions"] = $optionFeature ;
            $_SESSION["duration"] = $duration;
            $_SESSION["description"] = $description ;
        
             // Credit Card Details
            $_SESSION["card"] =  $card ;
            $_SESSION["Name"] = $cardName  ;
            $_SESSION["Number"] =  $cardNumber ;
            $_SESSION["ExpiryDate"] =$cardExpiry ;
            $_SESSION["cvv"] = $cardCVV ;*/


             $_SESSION["errMsg"] = $errMsg;
             header("location: fix_order.php");
        }
        if($errMsg == "")
        {
            sanitise_input($firstname);
            sanitise_input($lastname);
            database();
            header("location: receipt.php");
        }

       

 
?>





  

   

    






