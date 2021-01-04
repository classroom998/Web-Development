/*filename: [enquire.js] 
author: [Joel Yeow] 
Purpose: This file is for enquire.html data validation
Created: [24/9/20]
Last Updated [15/9/20]: 
*/




"use strict";


//Get Preferred Contact Option

function getContact()
{
    var contact = "Unknown";
    var storeContact = document.getElementById("contact").getElementsByTagName("input");
    for (var i =0; i<storeContact.length; i++)
    {
  if(storeContact[i].checked)
     contact = storeContact[i].value;
  
    }
    return contact;
}

// Get Optional Features Options

function getOptionFeature()
{
    var feature = "Unknown";
    var storeOptions = document.getElementById("addOptions").getElementsByTagName("input");
    for (var i =0; i<storeOptions.length; i++)
    {
  if(storeOptions[i].checked)
     feature  = storeOptionst[i].value;
  
    }
    return feature;
}



//Stores Order Details

function storeOrder(firstname,lastname,email,street,suburb,state,postcode,phone,contact)
{
   //Extracted Input Variables
   var firstname = document.getElementById("firstname").value;
   var lastname = document.getElementById("lastname").value;
   var email = document.getElementById("emel").value;
   var street = document.getElementById("street").value;
   var suburb = document.getElementById("suburb").value;
   var state = document.getElementById("state").value;
   var postcode = document.getElementById("postcode").value;
   var phone = document.getElementById("phone").value;
   var contact = getContact();
   var product = document.getElementById("product").value;
   var featureOne = document.getElementById("domain").checked;
   var featureTwo = document.getElementById("storage").checked;
   var featureThree = document.getElementById("certificate").checked;
   var featureFour = document.getElementById("secure").checked;
   var optionFeature = document.getElementById("addOptions").value;
   var duration = document.getElementById("duration").value;
   var description =  document.getElementById("description").value;
   var price = document.getElementById("productPrice").value;

   var feature = "";
   if(featureOne) feature = " Domain ";
   if(featureTwo) feature += " Storage ";
   if(featureThree) feature += " SSL Certificate ";
   if(featureFour) feature += " Advance Secure+ ";




   sessionStorage.firstname = firstname;
   sessionStorage.lastname = lastname;
   sessionStorage.email = email;
   sessionStorage.street = street;
   sessionStorage.suburb = suburb;
   sessionStorage.state = state;
   sessionStorage.postcode = postcode;
   sessionStorage.phone = phone;
   sessionStorage.contact = contact;
   sessionStorage.product = product;
   sessionStorage.feature = feature;
   sessionStorage.optionFeature = optionFeature;
   sessionStorage.duration = duration;
   sessionStorage.description = description;
   sessionStorage.price = price;

  
}


//Prefills Form Data

function prefill_form()
{
    if(sessionStorage.firstname != undefined)
    {
        document.getElementById("firstname").value = sessionStorage.firstname;
    } 
    switch(localStorage.contact)
   {
      case "email":
        document.getElementById("email").checked = true;
        break;
      case "post":
        document.getElementById("post").checked = true;
        break;
      case "handphone":
        document.getElementById("handphone").checked = true;
        break;
      
   }

   
}




function init()
{
    var regForm = document.getElementById("enquireForm");
    regForm.onsubmit = storeOrder;
    
    prefill_form();

}
window.onload = init;



