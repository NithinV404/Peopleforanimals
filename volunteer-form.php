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
    <title>People for animals | Volunteer-form </title>
    <link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<link href="css/donate.css" rel="stylesheet" type="text/css" media="all" />
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <div class="banner-header">
			<div class="container">
				<h2>volunteer registration form</h2>
			</div>
			</div>
    <form id="myform">
        <div class="donation-form-1">
            <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" pattern="^[a-zA-Z]+$" title="Enter proper email id" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Enter username" required>
                <small id="usernameHelp" class="form-text text-muted">Enter username </small>
            </div>

            <div class="form-group">
                <label for="exampleInputAge1">Age</label>
                <input title="Enter age above 18" type="number" class="form-control" id="exampleInputAge1" aria-describedby="ageHelp" min="18" max="200" placeholder="Enter your age" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPhone1">Phone number</label>
                <input type="tel" class="form-control" id="exampleInputPhone1" maxlength="10" placeholder="Phone number" required>
                <small id="phonehelp" class="form-text text-muted">Enter your phone number</small>
            </div>

            <div class="form-group">
                <label for="exampleInputAddress1">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Address" required>
                <small id="phonehelp" class="form-text text-muted">Enter your address</small>
            </div>

            <div class="form-group">
                <label class="control-label" required="">How would you like to volunteer? Your First Preference <span style="color:red;">*</span> :</label>
                <select class="form-control" name="merchant_param3" id="vol_type" required="" placeholder="ID proof*">
                <option value="Photography">Photography</option>
                <option value="Veterinarian Assistant">Veterinarian Assistant</option>
                <option value="Rescue and Rehabilitation">Rescue and Rehabilitation</option>
                <option value="Fundraising">Fundraising</option> 
            </select>
            </div>

            <div class="col-xs-12">
                <div class="form-group month">
                    <label class="control-label" required="">Which days of the week are you willing to volunteer? <span style="color:red;">*</span> :</label><br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Monday"> &nbsp; &nbsp; &nbsp;Monday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Tuesday"> &nbsp; &nbsp; &nbsp;Tuesday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Wednesday"> &nbsp; &nbsp; &nbsp;Wednesday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Thursday"> &nbsp; &nbsp; &nbsp;Thursday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Friday"> &nbsp; &nbsp; &nbsp;Friday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Saturday"> &nbsp; &nbsp; &nbsp;Saturday<br>
                    <input class="check" type="checkbox" name="wh_day[]" value="Sunday"> &nbsp; &nbsp; &nbsp;Sunday<br>

                </div>

            </div>

            <div class="col-xs-12">
                <div class="form-group timing">
                <label class="control-label" required="">No of hours a week <span style="color:red;">*</span> :</label>
                <select class="form-control" name="merchant_param3" id="vol_timing" required="" placeholder="Timing a day">
                <option value="less than 1 hour a day">less than 1 hour a day</option>
                <option value="1 hour a day">1 hour a day</option>
                <option value="2 hours a day">2 hours a day</option>
                <option value="3 hours a day">3 hours a day</option> 
                <option value="3 hours a day">4 hours a day</option> 
                <option value="3 hours a day">5 hours a day</option> 
                <option value="3 hours a day">6 hours a day</option> 
                <option value="more than 6 hours a day">more than 6 hours a day</option> 
            </select>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="form-group duration">
                    <label class="control-label" required="">What is the minimum duration for which you are willing to commit? <span style="color:red;">*</span> :</label>
                    <select class="form-control" name="merchant_param3" id="vol_duration" required="" placeholder="Timing a day">
                <option value="1 month">1 month</option>
                <option value="2 month">2 month</option>
                <option value="3 month">3 month</option> 
                <option value="3 month">4 month</option> 
                <option value="3 month">5 month</option> 
                <option value="3 month">6 month</option> 
                <option value="more than 6 month">more than 6 month</option> 
            </select>
                    </div>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1"> I agree terms and conditions</label>
            </div>
            <button type="submit" onclick="return confirm('Are you sure')" id="submit" class="c-btn btn-primary">Submit</button>
    </form>
</div>
    <?php include_once('includes/special.php');?>
    <?php include_once('includes/footer.php'); ?></div>
</body>
<script>
    var t_name = $("#exampleInputUsername1");
    var t_age  = $("#exampleInputAge1");
    var t_email  = $("#exampleInputEmail1");
    var t_phone = $("#exampleInputPhone1");
    var t_address = $("#exampleInputAddress1");
    var t_vol_type = $("#vol_type");
    var t_timing = $("#vol_timing");
    var t_commit_time = $("#vol_duration");

    function check()
    {
        alert(t_phone.val());
    }
    

    var store = [];
    $("form").submit(function(){
    event.preventDefault();

        var all_location_id = document.querySelectorAll('input[name="wh_day[]"]:checked');
        var aIds = [];
            for(var x = 0, l = all_location_id.length; x < l;  x++)
            aIds.push(all_location_id[x].value);


        var str = aIds.join(',');
        $.ajax({
        type:'POST',
        url:'volunteer-submit.php',
        data:{name:t_name.val(),
            age:t_age.val(),
            email:t_email.val(),
            phone:t_phone.val(),
            address:t_address.val(),
            vol_type:t_vol_type.val(),
            timing:t_timing.val(),
            commit_time:t_commit_time.val(),
            weeks:str}
        })
        window.location.href = "registration-success.php";
    })
</script>
</html>
