
<!--filename: [Process.php] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to Process
-->


<?php


session_start();

//POST Variables

$refnumber = $_POST["refnumber"];
$username = $_POST["username"];
$qualification = $_POST["qualification"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$roles = $_POST["roles"];

//echo $roles;


//SESSION Variable

 $_SESSION["refnumber"] = $refnumber;
 $_SESSION["username"] = $username ;
 $_SESSION["qualification"] = $qualification;
 $_SESSION["email"] = $email;
 $_SESSION["phone"] = $phone ;
 $_SESSION["roles"] = $roles;




$errMsg = "";



function database()
{
  include_once ("includes/Database.php");
}

if($qualification == "")
{
   $errMsg = "Please select a qualification\n";
}

if($roles == "")
{
   $errMsg = "Please enter a role\n";
}

if(($qualification == "undergraduate") && ($roles == "Organiser"))
{
   $errMsg = "Undergraduates cannot be registered as organisers\n";
}



if($errMsg != "")
{
   echo $errMsg;
}

if($errMsg == "")
{
  echo "You are successfully registered !!";
   database();
}






?>