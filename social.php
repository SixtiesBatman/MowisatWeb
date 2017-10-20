<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Social]","Debug");
?>

<!DOCTYPE html>
<html>

<head>

    <title><?PHP echo $txt["socialInit"]; ?></title>
 
    <?PHP
    include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/social.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>

</head>

<body>

    <?PHP
    include ''.dirname(__FILE__).'/template/header.php';
    ?>
    
    <!-- SECTION BEGINS -->





    <section class='container-fluid'>

        <div style="background-color: #DADADA;" class='row'>
            <div style="text-align: center;" class='col-xs-12 col-md-12 description'>
                <h3 style="text-align: center;"><?PHP echo $txt["description-how"]; ?></h3>
            </div>
        </div>

    </section>

    <section class='container-fluid'>

        <div style="height: 100px; background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

                kyugbubikgnihukgk

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div style="height: 100px;" class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="margin-top: 5px; width: 200px;" src="images/step by step.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>
        <div style="height: 100px; background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

                kyugbubikgnihukgk

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div style="height: 100px;" class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="margin-top: 5px; width: 200px;" src="images/step by step.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>
        <div style="height: 100px; background-color: #569EB6;" class='row'>
        
            <div class="col-md-1"></div>

            <div style="text-align: center; color: white;" class='col-md-10'>

                kyugbubikgnihukgk

            </div>    

            <div class="col-md-1"></div>

        </div>  


        <div style="height: 100px;" class="row">

            <div class="col-md-1"></div>

            <div class='col-md-10'>

                <div style="text-align: center;">
                    <img style="margin-top: 5px; width: 200px;" src="images/step by step.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
                
        </div>

    </section>




    <section class='container-fluid'>

        <div class='row'>
            
            <div class='col-xs-12 col-md-6 box dg'>
                <h2 style="font-size: 3em;"><?PHP echo $txt["digitalLib"]; ?></h2>
                <p id="textoSocial"><?PHP echo $txt["dlText"]; ?></p>               
            </div>

            <div class='col-xs-12 col-md-6 box cc'>
                <h2 style="font-size: 3em;"><?PHP echo $txt["codecademy"]; ?></h2>
                <p id="textoSocial"><?PHP echo $txt["cText"]; ?></p>               
            </div>

            <div class="clearfix col-md-12"></div>

        </div>

    </section>


    <!-- SECTION ENDS -->




    <!-- INITIATES FOOTER -->
    
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?> 

</body>

<html>