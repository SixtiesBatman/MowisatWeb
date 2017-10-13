<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Partners]","Debug");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carreer Options</title>

    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/careers.css" rel="stylesheet" type="text/css">

    <style>
        a {color: gray}
        a:hover {text-decoration: none; color: gray};
    </style>
</head>


<body>

<?PHP
    include ''.dirname(__FILE__).'/template/header.php';
?>

        
    <!-- INITIATES SECTION -->

    <section class='container-fluid'>
            
       <div class='row'>
            <div class='col-xs-12 careers-img' style="top: 0; padding: 0; margin: 0; background-image: url('images/careers.jpg'); opacity: 1;">
                <div style="margin-top: 0px; height: 300px; background-color: black; opacity: 0.5;">
                    <h1 style="margin: 0; padding-top: 150px;">VACANCIES</h1>
                </div>
            </div>           
        </div>

    </section> 

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3">
                <li class="tab col s6"><a class="active" href="#tab1">Contact From</a></li>
                <li class="tab col s3">
            </ul>
        </div>
        <div style="margin-top: 40px;" id="tab1" class="col-md-12">
            <div class="col-md-4"></div>
            <div style="background-color: #444; color: white;" class="col-md-4">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    Financial / Commercial Analyst & Researcher
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>
                        • Data mining<br> 
                        • Report Generation and interpretation<br> 
                        • Trend Analysis, opportunity identification<br>
                        • Research - macro (industry) and micro (customer) trends, future developments etc.
                    </p>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>   

    <!--
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s6"><a class="active" href="#tab1">All</a></li>
                <li class="tab col s6"><a href="#tab2">Commercial</a></li>
            </ul>
        </div>
        <div style="margin-top: 20px;" id="tab1" class="col-md-12">
            <div style="background-color: #444; color: white;" class="col-md-4">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    Financial / Commercial Analyst & Researcher
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>
                        • Data mining<br> 
                        • Report Generation and interpretation<br> 
                        • Trend Analysis, opportunity identification<br>
                        • Research - macro (industry) and micro (customer) trends, future developments etc.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>

        <div style="margin-top: 20px;" id="tab2" class="col-md-12">
            <div style="background-color: #444; color: white;" class="col-md-4">
                <div class="col-md-12 text-center" style="margin-top: 20px;">
                    Financial / Commercial Analyst & Researcher
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <p>
                        • Data mining<br> 
                        • Report Generation and interpretation<br> 
                        • Trend Analysis, opportunity identification<br>
                        • Research - macro (industry) and micro (customer) trends, future developments etc.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    
    </div>
     -->

    <!-- ENDS SECTION -->

    <!-- INITIATES FOOTER -->
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>