// JavaScript Document
function numeralsOnly(evt)
 {
       evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
           ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 48 || charCode > 57))
		 {
           alert("Enter numerals only in this field.");
           return false;
          }
           return true;
		   }
		   
//letters only
function lettersOnly(evt)
    {
     evt = (evt) ? evt : event;
     var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :((evt.which) ? evt.which : 0));
     if (charCode > 31 && (charCode < 65 || charCode > 90) &&(charCode < 97 || charCode > 122))
       {
          alert("Enter letters only.");
        return false;
      }
      else
     {
	return true;
    }
 }
 
 function validate()
  {
// name
  var v1=document.getElementById("name").value;
  if(v1==null || v1=="")
	{
	   alert("Name cannot be empty");   
	   return false;
	}

   //Email
   var v7=document.getElementById("mail").value;
   var atpos=v7.indexOf("@");
   var dotpos=v7.lastIndexOf(".");
   if (atpos<1 || dotpos<atpos+2 || dotpos+2>=v7.length)
     {
     alert("Not a valid e-mail address");
     return false;
     }

//Contact
 var v8=document.getElementById("cont").value;
	if(v8==null || v8=="")
	{
	   alert("Contact cannot be empty");
	   
	   return false;
	}
	if(v8.length!=10)
	{
	   alert("Contact number should be 10 digit");
	   
	   return false;
	}
	
	//massage
 var v17=document.getElementById("msg").value;
 	if(v17==null || v17=="")
	{
	   alert("query cannot be empty");
	   
	   return false;
	} 
	}