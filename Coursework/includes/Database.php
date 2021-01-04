
<?php



require_once("settings.php");
       $conn = @mysqli_connect($host,$user,$pwd, $sql_db);
   
       if(!$conn)
       {
           echo "<p> Databsse connection failure </p>";
   
       }
       if($conn)
       {
       $sql_db = mysqli_query($conn, "s103366239_db");
   
          //Create Database (Non-Existent)
                $query_Create = " CREATE TABLE IF NOT EXISTS orders(
                                  order_id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                  Order_Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
                                  Order_Status ENUM ('PENDING','FULFILLED','PAID','ARCHIVED')  DEFAULT 'PENDING',

                                FirstName VARCHAR(100) NOT NULL,
                                LastName VARCHAR(100) NOT NULL,
                                Email VARCHAR(100) NOT NULL,
                                Street VARCHAR(100) NOT NULL, 
                                Suburb  VARCHAR(100) NOT NULL,
                                Country_State VARCHAR(100) NOT NULL,
                                Postcode  INT(100) NOT NULL,
                                PhoneNumber INT(100) NOT NULL,
                                Preferred_Contact VARCHAR(100) NOT NULL,
                                Product VARCHAR(100) NOT NULL,
                                Product_Features VARCHAR(100) NOT NULL,
                                Price VARCHAR(100) NOT NULL,
                                Optional_Features VARCHAR(100) NOT NULL,
                                Duration INT(100) NOT NULL,
                                Add_Info VARCHAR(100) NOT NULL)";
   
           $query_Check = mysqli_query($conn, $query_Create);
           if(!$query_Check)
           {
               echo "Table Create error";
           }
           else if($query_Check){
               echo "Database exist";
           }
           
            //Insert data into database
            $firstname = $_SESSION["Firstname"];
            $lastname = $_SESSION["Lastname"];
            $email = $_SESSION["email"];
            $street = $_SESSION["street"];
            $suburb = $_SESSION["suburb"];
            $state = $_SESSION["state"];
            $postcode = $_SESSION["postcode"];
            $phone = $_SESSION["phone"];
            $contactType = $_SESSION["contact"];
            $product = $_SESSION["product"];
            $feature = $_SESSION["Features"];
            $price = $_SESSION["price"];
            $optionFeature = $_SESSION["optionalFeatures"];
            $duration = $_SESSION["duration"];
            $description = $_SESSION["description"];
   
            $sql_table = "orders";


   
           $query_Insert = "INSERT INTO $sql_table(
                

            FirstName,
            LastName,
            Email ,
            Street , 
            Suburb ,
            Country_State , 
            Postcode ,
            PhoneNumber ,
            Preferred_Contact ,
            Product ,
            Product_Features ,
            Price ,
            Optional_Features ,
            Duration ,
            Add_Info ) 

            


VALUES('$firstname','$lastname','$email','$street', '$suburb','$state','$postcode','$phone','$contactType','$product','$feature','$price','$optionFeature','$duration','$description')";


$result = mysqli_query($conn, $query_Insert);

if(!$result)
{
   echo "<p> Something is wrong with  " ,$query_Insert,"</p>";
   
}
else{

   echo "<p class=\"ok\"> Successfully added new data </P>";

}

mysqli_close($conn);
            
          
       
        }
           
       

       ?>