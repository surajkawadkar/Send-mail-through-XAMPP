	<?php
//$to = $_POST['uname'];
$to = "recepient mail";
$subject = $_POST['sub'];
$message = $_POST['msg'];
//$header = $_POST['addres'];


//$gender = $_POST['gender'];

//$phoneCode = $_POST['phoneCode'];
//$phone = $_POST['phone'];

 
if (mail ($to, $subject, $message))
{
  echo "mail send successfully";
 // header("Location:sendboys.php");
  
}
else{
  echo "cannot send";
}
?>


 
    

