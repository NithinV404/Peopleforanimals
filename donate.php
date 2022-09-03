<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People for animals | Donate </title>
  <link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
  <link href="css/donate.css" rel="stylesheet" type="text/css" media="all" />
</head>
<?php include_once('includes/header.php');?>
<body>
  <div class="banner-header">
			<div class="container">
				<h2>Donations</h2>
			</div>
			</div>
      <div class="form-container">
  <form>
<div class="donation-form-1">
  <div class="form-group">
    <label for="exampleInputUsername1">Email Username</label>
    <input type="text" title="Can only have alphabets" pattern="^[a-zA-Z]+$" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter username" required>
    <small id="usernameHelp" class="form-text text-muted">Enter username </small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" title="Enter proper email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputAmount1">Donation amount</label>
    <input type="tel" maxlength=5 class="form-control" id="exampleInputAmount1" placeholder="Amount" required>
    <small id="donationhelp" class="form-text text-muted">Enter the amount</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPhone1">Phone number</label>
    <input type="tel" maxlength=10 class="form-control" id="exampleInputPhone1" placeholder="Phone number" required>
    <small id="phonehelp" class="form-text text-muted">Enter your phone number</small>
  </div>

  <div class="form-group">
  <label for="identification-type">Enter your identification type</label>
  <select class="form-control" name="merchant_param3" id="identification-type" required="" placeholder="ID proof*">
    <option value="Permanent Account Number">Permanent Account Number (PAN)</option>
    <option value="Aadhaar Number">Aadhaar Number</option>
    <option value="Tax Identification Number">Tax Identification Number</option>
    <option value="Passport Number">Passport Number</option> 
  </select>
  </div>

  <div class="form-group">
  <label for="identification-number">Enter your identification number</label>
  <input type="text" id="identification-number" maxlength=20 class="form-control" name="merchant_param2" required="" placeholder="Tax Identification Number/PAN Number* ">             
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" > I agree terms and conditions</label>
  </div>
  <button type="submit" onclick="return confirm('Are you sure')" id="submit" class="c-btn">Submit</button>
</div>
</form>
</div>
  </body>
  <?php include_once('includes/special.php');?>
  <?php include_once('includes/footer.php');?></div>

<script>
    var email_field = $("#exampleInputEmail1");
    var amount_field = $("#exampleInputAmount1");
    var phone_field = $("#exampleInputPhone1");
    var user_field = $("#exampleInputUsername1");
    var id_type_field = $("#identification-type");
    var id_num_field = $("#identification-number");

    email_field.keyup(function(){
      if($(this).val()==""){
        $("#emailHelp").text("Field can only contain alphanumeric characters").css("color","red");
      }
        else
          $("#emailHelp").text('Email address').css("color","black");
    })
  
    amount_field.keyup(function(){
      if($(this).val()<100){
        $("#donationhelp").text('Donation amount cannot be less than 100').css("color","red"); 
      }
      else
        $("#donationhelp").text('Enter the amount').css("color","black");   
    })
   

    
    $("form").submit(function(){
      event.preventDefault();
      var email = email_field.val()
      var amount = amount_field.val();
      var username = user_field.val();
      var phone = phone_field.val(); 
      var id_type = id_type_field.val();
      var id_number = id_num_field.val();
      window.location.href = "donation-success.php";
      $.ajax({
        type:'POST',
        url:'mail.php',
        data:{email:email, amount:amount, username:username, phone:phone, id_type:id_type, id_number:id_number}
      })
    })
    
  </script>

</html>