<?php

//defining variable and set to empty values

$name_error =$email_error =$phone_error ="";
$first-name =last-name = phone-number=message = email ="";


if ($server["Request_Method"]=="Post"){
  if (Empty($-post["first-name"])){
    $name_error = "Name is required");
  }else{
    $first-name = test_input($_post["first-name"]);
    if(!preg_match("/^[A-Za-z .'-]+$/", $first-name)){
      $name_error ="Only Letters and White Space allowed";
    }
  }

  if (Empty($-post["last-name"])){
    $name_error = "Name is required");
  }else{
    $last-name = test_input($_post["last-name"]);
    if(!preg_match("/^[A-Za-z .'-]+$/", $last-name)){
      $name_error ="Only Letters and White Space allowed";
    }
  }

 if (empty ($_post["email"])){
   $email_error = "Email is required";
 }else{
   $email = test_input($_post["email"]);
   if (!filter_var($email, filter_validate_email)){
     $email_error ="Invalid email format";
   }
 }
 if (Empty($-post["phone-number"])){
   $name_error = "Phone number is required");
 }else{
   $name = test_input($_post["phone-number"]);
   if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $phone-number)){
     $name_error ="Invalid Phone Number";
   }
 }
 if (empty($-post["message"])){
   $message = "";
 }else {
   $message = test_input["message"]);
 }

}
function test_input($data){
  $data =trim($data);
  $data = striplashed($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
