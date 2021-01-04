

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Receipt </title>
    <link href="styles/styles_receipt.css" rel="stylesheet"/>
</head>
<nav>
  <label class="logo">JHosting</label>
</nav>
<body >




<section id="container"> 

    <h1 id="receipt"> Receipt </h1>
    <div id="tablePosition">
    <?php
    require_once("settings.php");
    $conn = @mysqli_connect($host,$user,$pwd, $sql_db);

    if(!$conn)
    {
        echo "<p> Databsse connection failure </p>";

    }
    else
    {
        //$sql_table = "orders";

        $query = "Select * FROM orders";

        $result = mysqli_query($conn,$query);

        if(!$result)
        {
            echo "<p> Something is wrong with  " ,$query,"</p>";
            
        }
        else{

            //echo "<table border=\"1\">\n";

            echo "<table>
           
                  <tr>\n
                <th> Order ID </th>
                <th> Order Time </th>
                
                <th > First Name </th>
                <th> Last Name </th>
                <th > Email </th>
                <th > Street </th>
                <th > Suburb </th>
                <th > State </th>
                <th > Postcode </th>
                <th > Phone </th>
                <th > Preferred Contact</th>
                <th > Product </th>
                <th > Features </th>
                <th > Price </th>
                <th > Optional Features </th>
                <th > Duration </th>
                <th > Description </th>
                </tr>";


                while($row = mysqli_fetch_assoc($result))
                {
                    echo " <tr>";
                    echo "<td>" ,$row["order_id"], "</td>\n";
                    echo "<td>" ,$row["Order_Time"], "</td>\n";
                    echo "<td>" ,$row["FirstName"], "</td>\n";
                     echo "<td>" ,$row["LastName"], "</td>\n";
                    echo "<td>" ,$row["Email"], "</td>\n";
                    echo "<td>" ,$row["Street"], "</td>\n";
                    echo "<td>" ,$row["Suburb"], "</td>\n";
                    echo "<td>" ,$row["Country_State"], "</td>\n";
                    echo "<td>" ,$row["Postcode"], "</td>\n";
                    echo "<td>" ,$row["PhoneNumber"], "</td>\n";
                    echo "<td>" ,$row["Preferred_Contact"], "</td>\n";
                    echo "<td>" ,$row["Product"], "</td>\n";
                    echo "<td>" ,$row["Product_Features"], "</td>\n";
                    echo "<td>" ,$row["Price"], "</td>\n";
                    echo "<td>" ,$row["Optional_Features"], "</td>\n";
                    echo "<td>" ,$row["Duration"], "</td>\n";
                    echo "<td>" ,$row["Add_Info"], "</td>\n";
                    "</tr>";
                }

                echo "</table>\n";

                mysqli_free_result($result);


        }
        mysqli_close($conn);
    }
   

    ?>
    </div>

</section>


<?php
include_once "includes/footer.inc";
?>


</body>
</html>
