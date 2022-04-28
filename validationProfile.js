/*
Upon click of a menu item in menu.php, this adds the item to the local storage and displays a message that the
item is in the users cart.
*/
"use strict";
function validateEmail(id) {
  var field=id.value;
  var flag=false;
  var msg=document.getElementById("emailmsg");
  if (field=="")
  {
    msg.innerHTML="Email cannot be empty";
    msg.className="text.danger";
  }
  else if (!(/^(.+)@(.+)$/.test(field)))
  {
    msg.innerHTML="Incorrect Email";
    msg.className="text.danger";
  }
  else
  {
    flag=true;
    msg.innerHTML="";
  }


  return flag;
}

function validatePhone(id) {
  var field=id.value;
  var flag=false;
  var msg=document.getElementById("phonemsg");
  if (field=="")
  {
    msg.innerHTML="Phone cannot be empty";
    msg.className="text.danger";
  }
  else if (!(/^\d\d\d-\d\d\d-\d\d\d\d$/.test(field))&&!(/^\d\d\d\d\d\d\d\d\d\d$/.test(field)))
  {
    msg.innerHTML="Incorrect Phone Number";
    msg.className="text.danger";
  }
  else
  {
    flag=true;
    msg.innerHTML="";
  }


  return flag;
}

function validateCard(id) {
  var field=id.value;
  var flag=false;
  var msg=document.getElementById("cardmsg");
  if (field=="")
  {
    msg.innerHTML="Card information cannot be empty";
    msg.className="text.danger";
  }
  else if (!(/^[0-9]{13,19}$/.test(field)))
  {
    msg.innerHTML="Incorrect Card Number";
    msg.className="text.danger";
  }
  else
  {
    
    flag=true;
    msg.innerHTML="";
  }


  return flag;
}

function validate(id)
{
  let email=document.getElementById("email");
  let phone=document.getElementById("phone");
  let card=document.getElementById("card");
  if (validateEmail(email)&&validatePhone(phone)&&validateCard(card))
    return true;
  else return false;
}