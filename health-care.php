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
    <title>People for animals | Health-care </title>
    <link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
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
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <div>
        <section>
            <div style="opacity: 0.6; background-color:white;"></div>
            <div>
                <div>
                    <div class="col-md-15 banner-header">
                        <h2>Health care</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="mbr-section content-article mbr-section__container" id="content1-35" style="
    box-shadow: 0 1px 10px 3px  rgb(148, 148, 148,0.3); border-radius:5px; margin-top:20px; margin-left:20px; margin-right:20px; padding:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <p class="mbr-section-text text-1">At the core of our hospital is the attention and care our veterinarians provide to animals that are brought in, with the sole intent of ultimately facilitating its return to its natural habitat.</p>
                        <p class="mbr-section-text text-1">The hospital houses an intensive care unit, X-ray facility, surgical unit, and quarantine unit. Our duty team comprises veterinarians, nursing staff and animal welfare officers, available at all times and always on call. Many animals are brought in by citizens or rescuers on account of injury. Animals that require urgent attention are usually visibly wounded, or are under severe trauma, often mandating further investigation. We rely on rescuer reports, professional judgement and experience to determine cause, an understanding which is essential to proposing the right treatment and care. Treating a wounded wild animal requires a sound understanding of physiology and behaviour, a high level of experience and facilities that enable correct action.</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <img src="images/clinical_care_img1.jpg" class="center-block" style="position:relative; height: 200px;">
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section class="mbr-section content-article mbr-section__container" id="content1-35" style=" 
             box-shadow: 0 1px 10px 3px  rgb(148, 148, 148,0.3); 
                border-radius:5px; margin-left:20px; margin-right:20px; padding:20px; 
                border-radius:5px;">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <p class="mbr-section-text text-1"><img src="images/clinical_care_img4.jpg" class="center-block" style="position:relative; 
                        width:350px; height: 300px; 
                        border-radius:5px;"></p>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <p class="mbr-section-text text-1">We have dealt with several kinds of problems. Surgically lancing and treating an abscess in a Hamilton's pond turtle confiscated from Bangalore Airport, amputating the limb of a Bonnet Macaque who had suffered extensive burns from electrocution, caesarean sections in Macaques (including an ovaro-hysterectomy in a senior female Macaque with an infected uterus; this macaque was successfully released into her home range post recovery); surgically repairing broken shells of Terrapins that are victims of automobile accidents, and treating necrotic wounds in a Monitor Lizard rescued from the pet trade. Birds with damaged feathers are 'imped' - a procedure where the damaged feathers are replaced with healthy feathers from a deceased bird of the same species. And so on. We’ve performed life-saving operative procedures and even invasive surgery, all of which are carried out under general anesthesia.</p>
                        <p class="mbr-section-text text-1">All animals are first examined. Animals which are displaced, orphaned or separated from a social group are brought on the road to normalcy with planned nutrition and care. Diagnostic and therapeutic approaches for various wildlife species are also derived from the combined experience of our team, and common knowledge of behaviour, habitat and relationships with various environmental aspects.</p>
                        <p class="mbr-section-text text-1">As part of our leap towards being a 'centre of excellence', we are developing our library of practises so that others may benefit in the future. We also have a post mortem room to assess cause of death, an important learning practise.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p class="mbr-section-text text-1"><br><em>The effort to upgrade and widen our capability through our medical equipment is constant. To know how you can Contribute to the hospital, <a style="font-weight: bold;" href="donate.php">click here</a>.</em></p>
                    <p class="mbr-section-text text-1"><em><a style="font-weight: bold;" href="volunteer.php">Be part of this unique, inspiring experience as a Volunteer</a>.</em></p>
                </div>
            </div>
        </section>
        <br>
        <section id="row3-9" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="mbr-overlay" style="opacity: 0.1; ">
            </div>
            <div class="container">
                <div class="row custom-gutter">
                    <div class="col-md-3 col-xs-6"><img src="images/clinical_care_img2.jpg" class="img-responsive center-block"></div>
                    <div class="col-md-3 col-xs-6"><img src="images/clinical_care_img3.jpg" class="img-responsive center-block"></div>
                    <div class="col-md-3 col-xs-6"><img src="images/clinical_care_img4.jpg" class="img-responsive center-block"></div>
                    <div class="col-md-3 col-xs-6"><img src="images/clinical_care_img5.jpg" class="img-responsive center-block"></div>
                </div>
            </div>
        </section>

        <section class="mbr-section follow1 mbr-parallax-background" id="follow1-6y" style="background-image: none; padding-top: 50px; padding-bottom: 50px; position: relative; background-attachment: scroll; background-size: auto;" data-jarallax-original-styles="background-image: url(&quot;assets/images/bird-2000x1332-1.jpg&quot;); padding-top: 50px; padding-bottom: 50px; position: relative;">
            <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
            </div>
        </section>
        <?php include_once('includes/special.php'); ?>
    </div>
    <?php include_once('includes/footer.php'); ?>
</body>

</html>