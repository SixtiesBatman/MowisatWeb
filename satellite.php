<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Satellite]","Debug");
?>

<!DOCTYPE html>
<html>
   
<head>
    <title>Satellite Broadband</title>

    
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
                    <h1 style="margin: 0; padding-top: 140px;">Connectivity</h1>
            
                </div>
            </div>
        </div>

    </section>


    <section class='container-fluid'>

        <div class='row'>
            <div class='col-xs-12 col-md-12 last-mile'>
                <h3>Connecting the last mile of Mexico to internet</h3>
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
                <p>Localization of rural low-income communities with no internet connectivity</p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p>Instalation of Wi-Fi hotspots power by satellite internet manage by the community</p>
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
                <p>Access to the Wi-Fi network via different methods</p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p>Internet brings different services and integrates communities to the Digital Economy</p>
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