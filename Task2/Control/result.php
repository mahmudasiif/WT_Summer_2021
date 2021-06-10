<?php
$validatename="";
$validateemail="";
$validatecomment="";
$validatecheckbox="";
$validateradio="";
$h1=$h2=$h3="";
$name=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
$comment=$_REQUEST["comment"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))

{
    $validatename= "you must enter name";

}
else
{
    $validatename= " "  .$name;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= " ".$email;
}
if(empty($_REQUEST["comment"]) || (strlen($_REQUEST["comment"])<3))
{
    $validatecomment= "Please leave a comment";

}
else
{
    $validatecomment=" " .$comment;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}

if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["hobby1"]))
   {
       $h1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
       $h2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
    $h3= $_REQUEST["hobby3"];
   }
}
}
?>