<?php

    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Satellite]","Debug");
?>

<!DOCTYPE html>
<html>
   
<head>
    <title><?PHP echo $txt["satelliteTitle"] ?></title>

    
    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/satellite.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>

</head>

<body>

    <?PHP
    include ''.dirname(__FILE__).'/template/header.php';
    ?>
            <!-- ENDS HEADER -->    

        <!-- INITIATES SECTION -->

    <section class='container-fluid connectivity-img'>

        <div class='row'>
            <div class='col-xs-12 sat bgMeshParent' style="background-image: url('images/sat.jpg')">
                <div class="bgMesh">
                    <h1 style="margin: 0; padding-top: 140px;"><?PHP echo $txt["satelliteImageTitle"]; ?></h1>
            
                </div>
            </div>
        </div>

    </section>


    <section class='container-fluid'>

        <div class='row'>
            <div class='col-xs-12 col-md-12 last-mile'>
                <h3><?PHP echo $txt["satelliteSubTitle"]; ?></h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

    <div class='row box-size'>
    
        <div class="col-md-1"></div>

        <div class='col-md-3 big-box'>

            <div class="logos">
                <img src="images/ruralcom.jpg" /> 
            </div>

        </div>    

        <div class="col-md-7 big-box margin-short">

            <div>
                <p><?PHP echo $txt["satelliteTxt1"]; ?></p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p><?PHP echo $txt["satelliteTxt2"]; ?></p>
            </div>    

        </div>


        <div class='col-md-3 logos big-box'>

            <div>
            <img src="images/wifi.jpg" />
            </div>

        </div>

        <div class="col-md-1"></div>
            
        


    </div>


    <div class='row box-size'>
    
        <div class="col-md-1"></div>

        <div class='col-md-3 big-box'>

            <div class="logos">
                <img src="images/phone.jpg" /> 
            </div>

        </div>    

        <div class="col-md-7 big-box margin-short">

            <div>
                <p><?PHP echo $txt["satelliteTxt3"]; ?></p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p><?PHP echo $txt["satelliteTxt4"]; ?></p>
            </div>    

        </div>


        <div class='col-md-3 big-box'>

            <div class="logos">
            <img src="images/dollar.jpg" />
            </div>

        </div>

        <div class="col-md-1"></div>
            
        


    </div>
        


    <!-- ENDS SECTION -->




    <!-- INITIATES FOOTER -->
    
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>