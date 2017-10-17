<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    
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