<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Mission]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Our Mission</title>

        <?PHP
            include ''.dirname(__FILE__).'/template/meta.php';
        ?>

        <link href="styles/aboutus.css" rel="stylesheet" type="text/css">
    
        <style>
            a {color: gray}
            a:hover {text-decoration: none; color: gray};
        </style>
    </head>
    <body>

    <?PHP
        include ''.dirname(__FILE__).'/template/header.php';
    ?>

    <!-- INITIATES CONTAINER SECTION -->

    <div style="background-color: #DADADA;" class="col-md-12">

        <div class="col-md-1"></div>

        <div class="col-md-10">
            <div style="padding: 0; width: 100%; height: 600px; background: url('images/mission.jpg') rgba(0,0,0,0.5);" class="z-depth-4 card-panel">
                <div style="margin-top: 0px; height: 600px; background-color: black; background: rgba(0,0,0,0.5);">
                    <h1 style="font-weight: 200; text-align: center; color: white; margin: 0; padding-top: 100px; opactiy: 1;">Our Mission</h1>
                    <h1 style="font-weight: 200; text-align: left; color: white; margin: 0 25px 0 25px; padding-top: 100px; opactiy: 1;">
                        To become the largest distributor of satellite broadband in Latin America and the
    largest provider of IoT PaaS solution to optimize business process with a strong
    commitment to develop scalable access to internet connectivity in marginalized
    areas.
                    </h1>
                
                </div>
            </div>
        </div>

        <div class="col-md-1"></div>

    </div>


    <!-- ENDS CONTAINER SECTION -->


    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
