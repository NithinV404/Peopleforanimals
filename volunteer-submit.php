<?php 
    include('includes/dbconnection.php');

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $vol_type = $_POST['vol_type'];
    $timing = $_POST['timing'];
    $commit = $_POST['commit_time'];
    $weeks = $_POST['weeks'];

    $body =  
"Thank you $name For registrating at pfa for $vol_type \n You will shortly register a email regarding the volunteering";
 
if(mail($email,'Registration',$body,'From: PFA'))
{
    echo "Message sent successfully";
    mysqli_query($con,"INSERT INTO vol_registration(vol_name,vol_age,vol_email,vol_phone,vol_address,vol_type,vol_timing,vol_duration,vol_weeks)
    VALUES('$name','$age','$email','$phone','$address','$vol_type','$timing','$commit','$weeks')");
}
else
echo "Message not sent";
?>