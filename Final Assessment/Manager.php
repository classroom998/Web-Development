<!--filename: [Manager.php] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to Manager
-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Manager </title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<?php

include_once "includes/menu.inc";
?>




<div class="manager_background">
  <section class="manager_section">
 <div class="manager_container">

   <form method="POST" action="Manager.php">
 <input type="text" class="search_box name" name="search_box" placeholder="Search..."></input>
 <input type="submit" class="search_manager" name="Search" value="Search"></input>
 <select name="search_option" id="search_option" class="search_type" >
                              <option value = "" >Please Select</option>
                              <option value="All">All Registration Records</option>			
                              <option value="Username"> Username</option>
 </select>

 
</form>

 </div>
</section>


<div class="search_result">




<?php
require_once("settings.php");
$conn = @mysqli_connect($host,$user,$pwd, $sql_db);

if(!$conn)
{
    echo "<p> Databsse connection failure </p>";

}
else
{
      if(isset($_POST['Search'])) 
      {

        $search_type = $_POST["search_option"];
        $search_box = trim($_POST["search_box"]);
    
       

      
        if($search_type == "All")
        {
            $query = "SELECT * FROM registration";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                $record = mysqli_fetch_assoc($result);
                if($record)
                {
                  echo "<table border=\"1\" >
         
                  <tr>\n
                <th> Registration ID </th>
                <th> Seminar Reference Table </th>
                <th> Username </th>
                <th> Qualification </th>
                <th> Email </th>
                <th > Phone Number </th>
              
               
                </tr>";

                  while($record)
                  {
                      echo "<tr>";
                      echo "<td>" ,$record["Registration_id"], "</td>\n";
                      echo "<td>" ,$record["Seminar_Reference_Number"], "</td>\n";
                      echo "<td>" ,$record["Username"], "</td>\n";
                      echo "<td>" ,$record["Qualification"], "</td>\n";
                      echo "<td>" ,$record["Email"], "</td>\n";
                      echo "<td>" ,$record["Phone_Number"], "</td>\n";
                      "</tr>";
                      $record = mysqli_fetch_assoc($result);

                     
                  }
                  echo "</table>\n";
                      
                      mysqli_free_result($result);
                }
                else
            {
              echo "<p>No such record found </p>";
            }

            }
        
                        
        } 

        if($search_type == "Username" )
        {
            $query_Name = "SELECT * FROM registration WHERE Username = '$search_box' ";
            $result_Name = mysqli_query($conn,$query_Name);

            $record = mysqli_fetch_assoc($result_Name);
            if($record)
            {
                echo "<table border=\"1\" >
         
                <tr>\n
              <th> Registration ID </th>
              <th> Seminar Reference Table </th>
              <th> Username </th>
              <th> Qualification </th>
              <th> Email </th>
              <th > Phone Number </th>
            
             
              </tr>";

                while($record)
                {
                    echo "<tr>";
                    echo "<td>" ,$record["Registration_id"], "</td>\n";
                    echo "<td>" ,$record["Seminar_Reference_Number"], "</td>\n";
                    echo "<td>" ,$record["Username"], "</td>\n";
                    echo "<td>" ,$record["Qualification"], "</td>\n";
                    echo "<td>" ,$record["Email"], "</td>\n";
                    echo "<td>" ,$record["Phone_Number"], "</td>\n";
                    "</tr>";
                    $record = mysqli_fetch_assoc($result);

                   
                }
                echo "</table>\n";
                    
                    mysqli_free_result($result);
            }
            else
            {
              echo "<p>No such record found </p>";
            }


       
       }
      }
mysqli_close($conn);     
}
                
?>





</div>
  
</div>



<?php
include_once "includes/footer.inc";
?>



</html>
