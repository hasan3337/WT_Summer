
function validfname()
{
  var validfname=document.getElementById("fname").value;

 if(!isNaN(validfname))
 {
     document.getElementById("fname").innerHTML="First name  must be alphabet";

     return false;
 }


 else
 {
     document.getElementById("fname").innerHTML="First name  is ok";

     return true;
 }

}

function validlname()
{
  var validlname=document.getElementById("lname").value;

  if(!isNaN(validlname))
  {
      document.getElementById("lname").innerHTML="Last name must be alphabet";

      return false;
  }


  else
  {
      document.getElementById("lname").innerHTML="Last name is ok";

      return true;
  }
}



function validage()
{
  var validage=document.getElementById("age").value;

  if(isNaN(validage))
  {
      document.getElementById("age").innerHTML="Age must be a number";

      return false;
  }


  else
  {
      document.getElementById("age").innerHTML="Age is ok";

      return true;
  }  
  
}



function validemail()
{
  var emailval=document.getElementById("email").value;

  var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if(emailval.match(pattern))
  {
      document.getElementById("email").innerHTML="Email is ok";

      return true;
  }

  else
  {
      document.getElementById("email").innerHTML="Email format is incorrect";

      return false;
  }
  
}


function validpass()
{
  var validpass=document.getElementById("pword").value;

  var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;


  if(validpass.length>=8 && validpass.match(pattern))
  {
      document.getElementById("pword").innerHTML="Password is ok";

      return true;

  }


  else
  {
      document.getElementById("pword").innerHTML="Password must have at least one alphabet and one number and greater than or equal to 8 characters";
      
      return false;
  }
}



function validradio()
{
  if(document.getElementById("jp").checked==true)
  {
      
      document.getElementById("des").innerHTML="Junior Programmer has been selected";
      
      return true;
  }

  else if(document.getElementById("sp").checked==true)
  {
      document.getElementById("des").innerHTML="Senior Programmer has been selected";

      return true;
  }

  else if(document.getElementById("pld").checked==true)
  {
      document.getElementById("des").innerHTML="Project Lead has been selected";

      return true;
  }

  else
  {
      document.getElementById("des").innerHTML="Please select a radio button";

      return false;
  }

}

function validbox()
{
  if(document.getElementById("pl1").checked==true  && document.getElementById("php").checked==true )
  {
      
      document.getElementById("prl").innerHTML="Java and PHP has been selected";

      return true;
  }

  else if(document.getElementById("pl2").checked==true && document.getElementById("cplusplus").checked==true)
  {
      document.getElementById("prl").innerHTML="PHP and C++ has been selected";

      return true;
      }

  else if(document.getElementById("pl3").checked==true && document.getElementById("java").checked==true)
  {
      document.getElementById("prl").innerHTML="Java and C++ has been selected";

      return true;
      }

  else if(document.getElementById("pl1").checked==false && document.getElementById("php").checked==false && document.getElementById("cplusplus").checked==false)
  {
      document.getElementById("prl").innerHTML="Please select a Checkbox";

      return false;
      }

  else if(document.getElementById("pl2").checked==true )
  {
      document.getElementById("prl").innerHTML="PHP  has been selected";

      return true;
      }

  else if( document.getElementById("pl3").checked==true)
  {
      document.getElementById("prl").innerHTML=" C++ has been selected";

      return true;
      }

  else if(document.getElementById("pl1").checked==true )
  {
      document.getElementById("prl").innerHTML="Java has been selected";

      return true;
      }

  else
  {
      document.getElementById("prl").innerHTML="All the options have been selected";

      return true;
  }

}


function validfile()
{
  
  var validfile=document.getElementById("myfile").value;

  var pattern=/\.(jpg|jpeg|png|doc|docx|pdf)$/;

  if(validfile.match(pattern))
  {
      document.getElementById("fe").innerHTML="File error";

      return true;

  }

  else
  {
      document.getElementById("fe").innerHTML="File is ok";

      return false;
  }
}



function checkformtrue()
{
  if(validfname()==true && validlname()==true && validemail()==true && validage()==true && validpass()==true && validradio()==true && validbox()==true && validfile()==true)
  { 
      document.getElementById("sm").innerHTML="All fields are required";

      return true;

  }


  else
  {
      document.getElementById("sm").innerHTML="Please fillup all the fields";

      return false;
  }

}