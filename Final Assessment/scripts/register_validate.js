/*filename: [register_validate.js] 
author: [Joel Yeow] 
Created: [24/11/20]
Description: Refers to register_validate

*/




"use strict";


//Data Validation

function validate()
{
  var refnumber = document.getElementById("refnumber").value;
  var username = document.getElementById("username").value;
  var phone = document.getElementById("phone").value;
  var register = true;

  var errMsg="";

  //Empty Fields

  if(refnumber == "")
  {
    errMsg += " Please enter a seminar code\n ";
    register=false;
  }
  if(username == "")
  {
    errMsg += " Please enter a username\n ";
    register=false;
  }
  if(phone == "")
  {
    errMsg += " Please enter a phone number \n";
    register=false;
  }


  // Data Validatino FIelds

  if((refnumber[0] != "S" ) || (refnumber.length < 5))
  {
     errMsg += " Please enter a seminar code beginning with a capital S and less than 5 characters\n";
     register=false;
  }
  if(!username.match(/^[a-zA-Z]{2,20}$/))
  {
    errMsg += " Please enter a username between 2 and 20 alpha characters\n ";
    register=false;
  }
  if(!phone.match(/^[0-9]{10}$/))
  {
    errMsg += " Please enter a 10 digit phone number \n";
    register=false;
  }


  //Infor correct, direct to Process page

  if(errMsg != "")
  {
     alert(errMsg);
  }

  if(register)
  {
    
     window.location("Process.php");
  }


  return register;



}


//Stores Order Details

function storeNumber(refnumber1,refnumber2)
{
   //Input Variables
   var refnumber1 = document.getElementById("ref_number1");
   var refnumber2 = document.getElementById("ref_number2");
  
   var referencenumber = "";
   if(referencenumber == refnumber1)
   {
      sessionStorage.refnumber1 = refnumber1;
      document.getElementById("refnumber").value = sessionStorage.refnumber1;
   }
   if(referencenumber == refnumber2)
   {
     sessionStorage.refnumber2 = refnumber2;
     document.getElementById("refnumber").value = sessionStorage.refnumber2;
   }
   

  
}











function init()
{
    var regForm = document.getElementById("RegisterForm");
    regForm.onsubmit = validate;

    storeNumber();
    

}
window.onload = init;



