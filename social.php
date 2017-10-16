<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Social]","Debug");
?>

<!DOCTYPE html>
<html>

<head>

    <title>Social Initiatives</title>
 
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
                <h2 style="font-size: 3em;">Digital Library</h2>
                <p id="textoSocial">The Digital Library acts as a time capsule, downloading selected content, which is delivered to the customers through a new generation of hardware. It is a storage device, serving as an intermediary between real-time internet connectivity and access to information in rural areas. Our solution is a substitute to cabling vast areas with internet connectivity, the Digital Library provides internet content previously stored in servers distributed through box receivers.</p>               
            </div>

            <div class='col-xs-12 col-md-6 box cc'>
                <h2 style="font-size: 3em;">Codecademy</h2>
                <p id="textoSocial">Codecademy is an education initiative aimed at developing programming professionals through unconventional methods of learning. It is a web platform, both with offline and online abilities that is geared towards creating professionals within six months. Mowisat is bringing tailored education for the future programmers of Mexico.</p>               
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