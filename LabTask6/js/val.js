function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "" || fname.length < 6 ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
      return false; 
    }
   if ( password == "") {
     document.getElementById("errorpassword").innerHTML="Please fill out last name";
      return false;
    }
    if (comment == "" || fname.length < 6 ) {
        document.getElementById("errorcomment").innerHTML="Please fill out the comment box";
         return false;
       }
   
    
  }

 function nameval()

  {
    var fname = document.getElementById("fname").value;
    if (fname == "" || fname.length < 6 ) {
        document.getElementById("errorfname").innerHTML="Please insert a valid name";
       }
       else
       {
        document.getElementById("errorfname").innerHTML="your name is valid";

       }
  }
   function emailval()

  {
    var email = document.getElementById("email").value;
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is  correct";
      return false; 
    }
       else
       {
        document.getElementById("erroremail").innerHTML="your email format is not correct";

       }
  }
  function passval()

  {
    var password = document.getElementById("password").value;
    if ( password == "" || password.length < 8) {
        document.getElementById("errorpassword").innerHTML="Password must be in 8 charecter";
         return false;
    }
       else
       {
        document.getElementById("errorpassword").innerHTML="your passsword is valid";

       }
  }
  function comval()

  {
    var comment = document.getElementById("comment").value;
    if ( comment == "" ) {
        document.getElementById("errorcomment").innerHTML="please leave a comment";
         return false;
    }
       else (comment == ""||comment.length < 1  )
       {
        document.getElementById("errorcomment").innerHTML="thanks for your comment";

       }
  }
  

  function myfunc()
  {
alert("hellow world");
  }
