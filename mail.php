<?php 

include('includes/dbconnection.php');

$email = $_POST['email'];
$amount = $_POST['amount'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$time = date('Y-m-d H:i:s');
$id_type = $_POST['id_type'];
$id_number = $_POST['id_number'];

$body = " 
We have recieved payment from $username of amount $amount on people for animals \n
Thank you for donating at PFA
Username: $username \n Email: $email \n Amount: $amount \n 
Please visit our website again
";

if(mail($email,'Donation',$body,'From: PFA'))
{
    echo "Message sent successfully";
    mysqli_query($con,"INSERT INTO donations(donation_uname,donation_email,donation_amt,donation_phn,donation_time,identity_type,identity_number)
    VALUES('$username','$email','$amount','$phone','$time','$id_type','$id_number')");
}
else
echo "Message not sent";
?>