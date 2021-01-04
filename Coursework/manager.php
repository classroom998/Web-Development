

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Assignment 3 - Web Hosting Website"/>
    <meta name = "keyword" content=" Web Hosting"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Manager </title>
    <link href="styles/styles_manager.css" rel="stylesheet"/>
</head>
<?php

include_once "includes/menu.inc";
?>
<body >


<section id="container"> 

    <h1 id="manager"> Manager </h1>
    <form method="POST" action="manager.php" >
    <fieldset><legend>Order Details</legend>
    
		<p class="row">	<label for="name">Name </label>
            <input type="text" name="name" id="name" /></p>
            
		<p class="row">	<label for="product">Product </label>
            <input type="text" name="product" id="product" /></p>
            
		<p class="row">	<label for="price">Price: </label>
			<input type="text" name="price" id="price" /></p>

            <p class="row">	<label for="order_status">Order Status </label>
            <input type="text" name="order_status" id="order_status" /></p>

            <p class="row">	<label for="search_option">Search Option </label>
            <select name="search_option" id="search_option" >
                              <option value = "" >Please Select</option>
                              <option value="Name">Name</option>			
                              <option value="Product"> Product</option>
                              <option value="Price">Price</option>
                              <option value="OrderStatus">Order status</option>
                              <option value="All">All Details</option>
                              <option value="UpdateStatus">Update Status</option>
                        </select> </p>
            
        <p>	<input type="submit" name="Search" value="Search" />  &nbsp; <input type="submit" name="Clear" value="Clear" /> </p>
     
       
	</fieldset>
	</form>
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
          if(isset($_POST['Search'])) 
          {

            $search_all = $_POST["search_option"];
            //$search_Name = $_POST["Name"];
            $name = trim($_POST["name"]);
            $product = trim($_POST["product"]);
            $price = trim($_POST["price"]);
            $order_status = trim($_POST["order_status"]);

            //$update_status = trim($_POST["UpdateStatus"]);

            //$query = "SELECT * FROM orders";
            //$result = mysqli_query($conn,$query);

            /*if(!$result)
            {
                echo "<p> Something is wrong with  " ,$query,"</p>";
                
            }*/
            if($search_all == "All")
            {
                $query = "SELECT * FROM orders";
                $result = mysqli_query($conn,$query);

                if($result)
                {
                    $record = mysqli_fetch_assoc($result);
                    if($record)
                    {
                      echo "<table border=\"1\" >
             
                      <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                   
                    </tr>";
  
                      while($record)
                      {
                          echo "<tr>";
                          echo "<td>" ,$record["order_id"], "</td>\n";
                          echo "<td>" ,$record["Order_Time"], "</td>\n";
                          echo "<td>" ,$record["Order_Status"], "</td>\n";
                          echo "<td>" ,$record["FirstName"], "</td>\n";
                          echo "<td>" ,$record["LastName"], "</td>\n";
                          echo "<td>" ,$record["Product"], "</td>\n";
                          echo "<td>" ,$record["Product_Features"], "</td>\n";
                          echo "<td>" ,$record["Price"], "</td>\n";
                          echo "<td>" ,$record["Optional_Features"], "</td>\n";
                          echo "<td>" ,$record["Duration"], "</td>\n";
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

            if($search_all == "Name" &&  $name)
            {
                $query_Name = "SELECT * FROM orders WHERE Firstname = '$name' OR LastName='$name' ";
                $result_Name = mysqli_query($conn,$query_Name);

                $record = mysqli_fetch_assoc($result_Name);
                if($record)
                {
                  echo "<table border=\"1\" >
         
                  <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                   
                    </tr>";

                  while($record)
                  {
                      echo "<tr>";
                      echo "<td>" ,$record["order_id"], "</td>\n";
                      echo "<td>" ,$record["Order_Time"], "</td>\n";
                      echo "<td>" ,$record["Order_Status"], "</td>\n";
                      echo "<td>" ,$record["FirstName"], "</td>\n";
                      echo "<td>" ,$record["LastName"], "</td>\n";
                      echo "<td>" ,$record["Product"], "</td>\n";
                      echo "<td>" ,$record["Product_Features"], "</td>\n";
                      echo "<td>" ,$record["Price"], "</td>\n";
                      echo "<td>" ,$record["Optional_Features"], "</td>\n";
                      echo "<td>" ,$record["Duration"], "</td>\n";
                      "</tr>";
                      $record = mysqli_fetch_assoc($result_Name);

                     
                  }
                        echo "</table>\n";
                      
                      mysqli_free_result($result_Name);
                }
                else
                {
                  echo "<p>No such record found </p>";
                }

            }
           
            if($search_all == "Product" &&  $product)
            {
                $query_Name = "SELECT * FROM orders WHERE Product = '$product'  ";
                $result_Product = mysqli_query($conn,$query_Name);



              if($result_Product)
              {
                  $record = mysqli_fetch_assoc($result_Product);
                  if($record)
                  {
                    echo "<table border=\"1\" >
           
                    <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                   
                    </tr>";

                    while($record)
                    {
                        echo "<tr>";
                        echo "<td>" ,$record["order_id"], "</td>\n";
                        echo "<td>" ,$record["Order_Time"], "</td>\n";
                        echo "<td>" ,$record["Order_Status"], "</td>\n";
                        echo "<td>" ,$record["FirstName"], "</td>\n";
                        echo "<td>" ,$record["LastName"], "</td>\n";
                        echo "<td>" ,$record["Product"], "</td>\n";
                        echo "<td>" ,$record["Product_Features"], "</td>\n";
                        echo "<td>" ,$record["Price"], "</td>\n";
                        echo "<td>" ,$record["Optional_Features"], "</td>\n";
                        echo "<td>" ,$record["Duration"], "</td>\n";
                        "</tr>";
                        $record = mysqli_fetch_assoc($result_Product);

                       
                    }
                    echo "</table>\n";
                        
                        mysqli_free_result($result_Product);
                  }
                  else
              {
                echo "<p>No such record found </p>";
              }

              }
              
   
            }

            if($search_all == "Price" &&  $price)
            {
                $query_Name = "SELECT * FROM orders WHERE Price = '$price'  ";
                $result_Price = mysqli_query($conn,$query_Name);



              if($result_Price)
              {
                  $record = mysqli_fetch_assoc($result_Price);
                  if($record)
                  {
                    echo "<table border=\"1\" >
           
                    <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                   
                    </tr>";

                    while($record)
                    {
                        echo "<tr>";
                        echo "<td>" ,$record["order_id"], "</td>\n";
                        echo "<td>" ,$record["Order_Time"], "</td>\n";
                        echo "<td>" ,$record["Order_Status"], "</td>\n";
                        echo "<td>" ,$record["FirstName"], "</td>\n";
                        echo "<td>" ,$record["LastName"], "</td>\n";
                        echo "<td>" ,$record["Product"], "</td>\n";
                        echo "<td>" ,$record["Product_Features"], "</td>\n";
                        echo "<td>" ,$record["Price"], "</td>\n";
                        echo "<td>" ,$record["Optional_Features"], "</td>\n";
                        echo "<td>" ,$record["Duration"], "</td>\n";
                        "</tr>";
                        $record = mysqli_fetch_assoc($result_Price);

                       
                    }
                    echo "</table>\n";
                        
                        mysqli_free_result($result_Price);
                  }
                  else
              {
                echo "<p>No such record found </p>";
              }

              }
              
   
            }

            if($search_all == "OrderStatus" &&  $order_status)
            {
                $query_Name = "SELECT * FROM orders WHERE Order_Status = '$order_status' AND Order_Status = 'PENDING'  ";
                $result_Status = mysqli_query($conn,$query_Name);



              if($result_Status)
              {
                  $record = mysqli_fetch_assoc($result_Status);
                  if($record)
                  {
                    echo "<table border=\"1\" >
           
                    <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                   
                    </tr>";

                    while($record)
                    {
                        echo "<tr>";
                        echo "<td>" ,$record["order_id"], "</td>\n";
                        echo "<td>" ,$record["Order_Time"], "</td>\n";
                        echo "<td>" ,$record["Order_Status"], "</td>\n";
                        echo "<td>" ,$record["FirstName"], "</td>\n";
                        echo "<td>" ,$record["LastName"], "</td>\n";
                        echo "<td>" ,$record["Product"], "</td>\n";
                        echo "<td>" ,$record["Product_Features"], "</td>\n";
                        echo "<td>" ,$record["Price"], "</td>\n";
                        echo "<td>" ,$record["Optional_Features"], "</td>\n";
                        echo "<td>" ,$record["Duration"], "</td>\n";
                        "</tr>";
                        $record = mysqli_fetch_assoc($result_Status);

                       
                    }
                    echo "</table>\n";
                        
                        mysqli_free_result($result_Status);
                  }
                  else
              {
                echo "<p>No such record found </p>";
              }

              }
              
   
            }
            if($search_all == "UpdateStatus")
            {
                $query = "SELECT * FROM orders";
                $result = mysqli_query($conn,$query);

                if($result)
                {
                    $record = mysqli_fetch_assoc($result);
                    if($record)
                    {
                      echo "<table border=\"1\" >
             
                      <tr>\n
                    <th> Order ID </th>
                    <th> Order Time </th>
                    <th> Order Status </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th > Product </th>
                    <th > Features </th>
                    <th > Price </th>
                    <th > Optional Features </th>
                    <th> Duration </th>
                    <th> Update Status </th>
                    <th> Latest Update Status </th>
                   
                    </tr>";
  
                      while($record)
                      {

                       

                          echo "<tr>";
                          echo "<td>" ,$record["order_id"], "</td>\n";
                          echo "<td>" ,$record["Order_Time"], "</td>\n";
                          echo "<td>" ,$record["Order_Status"], "</td>\n";
                          echo "<td>" ,$record["FirstName"], "</td>\n";
                          echo "<td>" ,$record["LastName"], "</td>\n";
                          echo "<td>" ,$record["Product"], "</td>\n";
                          echo "<td>" ,$record["Product_Features"], "</td>\n";
                          echo "<td>" ,$record["Price"], "</td>\n";
                          echo "<td>" ,$record["Optional_Features"], "</td>\n";
                          echo "<td>" ,$record["Duration"], "</td>\n";
                          echo "<td><a href='Update_Test.php'>Update</a> &nbsp
                                <a href='Order_Status_Updates/Delete.php'>Delete</a> </td>\n";

                          echo "<td>" ,$record["Order_Status"], "</td>\n";
                        

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
           

        }
        if(isset($_POST['Clear']))
        {
            header("location: manager.php");
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
