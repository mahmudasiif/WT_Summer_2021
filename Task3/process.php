<?php
//get data
$formdata=array(
'firstName'=>$_POST['firstName'],
'lastName'=>$_POST['lastName'],
'email'=>$_POST['email'],
'mobile'=>$_POST['mobile'],
);
//array2json
$jsondata=json_encode($formdata, JSON_PRETTY_PRINT);

//write in json
if(file_put_contents("data.json", $jsondata))
	echo "saved";

else
	echo "not saved"


?>