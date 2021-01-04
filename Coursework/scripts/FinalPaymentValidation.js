
"use strict";


//Get Credit Card Type: Visa, Mastercard , AMEX

/*function getCard()
{
    var card = "Unknown";
    var storeCard = document.getElementById("cards").getElementsByTagName("input");
    for (var i =0; i<storeCard.length; i++)
    {
  if(storeCard[i].checked)
     card = storeCard[i].value;
  
    }
    return card;
}*/


//Gets order data from enquiry page

function getOrder()
{
   
    //Confirmation of details
   if(sessionStorage.firstname != undefined)
   {
    
      // Fill hidden fields
        document.getElementById("firstname").value = sessionStorage.firstname;
        document.getElementById("lastname").value = sessionStorage.lastname;
        document.getElementById("emel").value = sessionStorage.email;
         document.getElementById("street").value = sessionStorage.street;
         document.getElementById("suburb").value = sessionStorage.suburb;
        document.getElementById("state").value = sessionStorage.state;
        document.getElementById("postcode").value = sessionStorage.postcode;
        document.getElementById("phone").value = sessionStorage.phone;
        document.getElementById("contact").value = sessionStorage.contact;
        document.getElementById("product").value = sessionStorage.product;
        document.getElementById("productFeatures").value = sessionStorage.feature;
        document.getElementById("optionalFeatures").value = sessionStorage.optionFeature;
        document.getElementById("duration").value = sessionStorage.duration;
        document.getElementById("description").value = sessionStorage.description;
        document.getElementById("productPrice").value = sessionStorage.price;
   }
   
   
}


function init()
{
     getOrder();
}
window.onload = init;