<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>People for animals | Volunteer </title>
<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			
		<div class="banner-header">
			<div class="container">
				<h2>Volunteer</h2>
			</div>
			</div>
	<!--about-->
    <?php
				$query = mysqli_query($con, "select * from  tblpage where PageType='volunteer'");
				while ($row = mysqli_fetch_array($query)) {


				?>
	<section class="mbr-section content-article mbr-section__container" id="content1-35" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 10px;">
    <div class="container" >
        <div class="row" >
            <div class="col-xs-12 col-md-12">
                <p class="mbr-section-text text-1"><?php echo $row['PageDescription']; }?></p>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section content-article mbr-section__container" id="content1-35" style="background-color: rgb(255, 255, 255); padding-top: 10px; padding-bottom: 20px;">
    <div class="container">
        <div class="row" style="
     box-shadow: 0 1px 10px 3px  rgb(148, 148, 148,0.3); border-radius:5px; padding:10px">
            <div class="col-xs-12 col-md-12">
                <h2>General Volunteering</h2><br>
                <p>There are many areas in which volunteers of all ages can help with. Volunteers can use their talent, inherent skill or pure interest in these. These needs change from time to time, so it is good to stay in touch with our Facebook page to know when/how to help.</p>
                <div class="panel">
                    <ul class="list-unstyled">
						<br>
                      <li>Animal enclosure cleaning</li>
                      <li>Feeding the animals</li>
                      <li>Species identification</li>
                      <li>Participating in rescue and releases</li>
                      <li>Assisting the doctor in treatments</li>
                      <li>Campus enrichment, gardening, painting and conservation</li>
                      <li>Hosting of workshops and roadshows</li>
                      <li>Survey skills (studying the ecology within our shelter)</li>
                      <li>Design, photography and publicity material</li>
                      <li>Getting sponsors for the adoption programme</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section content-article mbr-section__container" id="content1-35" style="background-color: rgb(255, 255, 255); padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h2>Volunteers Sign-up Form</h2><br>
                <p style="margin-bottom:10px;">If you would like to volunteer virtually as well as physically, please register twice.</p> 
                <p><b><a href="volunteer-form.php">Sign up for volunteering</a></b></p>				
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-hero" id="row3-9" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="mbr-overlay" style="opacity: 0.1; ">
    </div>
    <div class="container">
    <div class="row custom-gutter">
        <div class="col-md-3 col-xs-6"><img src="images/volunteer_img1.jpg" class="img-responsive center-block"></div>
        <div class="col-md-3 col-xs-6"><img src="images/volunteer_img2.jpg" class="img-responsive center-block"></div>
        <div class="col-md-3 col-xs-6"><img src="images/volunteer_img3.jpg" class="img-responsive center-block"></div>
        <div class="col-md-3 col-xs-6"><img src="images/volunteer_img4.jpg" class="img-responsive center-block"></div>     
    </div>
    </div>
</section>
				<!--advantage-->
			<!--specials-->
			 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
			
</body>
</html>