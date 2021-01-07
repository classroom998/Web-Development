<!--filename: [Database.php] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to Database
-->
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
                $query_Create = " CREATE TABLE IF NOT EXISTS registration(
                                  Registration_id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

                                Seminar_Reference_Number VARCHAR(100) NOT NULL,
                                Username VARCHAR(100) NOT NULL,
                                Qualification VARCHAR(100) NOT NULL, 
                                Email  VARCHAR(100) NOT NULL,
                                Phone_Number VARCHAR(100) NOT NULL,  Roles VARCHAR(100) NOT NULL)";
   
           $query_Check = mysqli_query($conn, $query_Create);
          
            //Insert data into database
            $refnumber = $_SESSION["refnumber"];
            $username = $_SESSION["username"];
            $qualification = $_SESSION["qualification"];
            $email = $_SESSION["email"];
            $phone = $_SESSION["phone"];
            $roles = $_SESSION["roles"];
        
   
            $sql_table = "registration";


   
           $query_Insert = "INSERT INTO $sql_table(
                
            Seminar_Reference_Number,
            Username,
            Qualification,
            Email, 
            Phone_Number, Roles) 

            


VALUES('$refnumber','$username','$qualification', '$email' , '$phone', '$roles')";
     //echo $query_Insert;

     $result = mysqli_query($conn, $query_Insert);


mysqli_close($conn);
                
        }
             

       ?>