<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[how-works]","Debug");
?>

<!DOCTYPE html>
<html>
   
<head>
    <title>How it works</title>

    
    <?PHP
    include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/how-works.css" rel="stylesheet" type="text/css">

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
            <div class='col-xs-12 sat bgMeshParent' style="background-image: url('images/works.png')">
                <div class="bgMesh">
                    <h1 style="margin: 0; padding-top: 110px;">How it works</h1>
                </div>
            </div>
        </div>

    </section>


    <section class='container-fluid'>

        <div class='row'>
            <div class='col-xs-12 col-md-12 description'>
                <h3>Improving Mexico quality of life</h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

    <div class='row box-size'>
    
        <div class="col-md-1"></div>

        <div class='col-md-3 big-box'>

            <div class="logos">
                <img src="images/rural.jpg" /> 
            </div>

        </div>    

        <div class="col-md-7 big-box margin-short">

            <div>
                <p>Connecting Mexico's unconnected areas to the internet</p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p>Bringing digital services: banking, saving, news, entertainment...</p>
            </div>    

        </div>


        <div class='col-md-3 logos big-box'>

            <div>
            <img src="images/services.jpg" />
            </div>

        </div>

        <div class="col-md-1"></div>
            
        


    </div>


    <div class='row box-size'>
    
        <div class="col-md-1"></div>

        <div class='col-md-3 big-box'>

            <div class="logos">
                <img src="images/edu.jpg" /> 
            </div>

        </div>    

        <div class="col-md-7 big-box margin-short">

            <div>
                <p>Educational initiatives: learning how to code, freelancing jobs...</p>  
            </div>

        </div>

        <div class="col-md-1"></div>

    </div>  


    <div class="row box-size blue">

        <div class="col-md-1"></div>
        
        
                
        <div class="col-md-7 big-box margin-big">

            <div>
                <p>Deployment of Mexiico.in criptocurrency to fully integrate a rural Digital Economy</p>
            </div>    

        </div>


        <div class='col-md-3 big-box'>

            <div class="logos">
            <img src="images/money.jpg" />
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