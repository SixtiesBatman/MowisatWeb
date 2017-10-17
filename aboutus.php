<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Aboutus]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>

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

    <section class='container-fluid aboutus-pic' style="padding-top: 0; margin-top: 0; height: 300px !important; margin-bottom: 0; background-image: url('images/aboutus-sat.jpg')">
        <div style="margin-right: 0; margin-top: 0px; height: 300px; background-color: black;  background: rgba(0,0,0,0.5)" class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-10'>
                <h1 style="font-weight: 200; color: white; margin: 0; padding-top: 100px;">About us</h1>
            </div>
            <div class="col-md-1"></div>

        </div>
    </section>

    <section class='container-fluid know-more'>
        <div class='row'>

            <div class="col-md-1"></div>
            <div class='col-xs-12 col-sm-3 image'>
                <img src="images/dish1.jpg" />
            </div>

            <div class='col-xs-12 col-sm-7 letter-size'>
                <h3 style="color: black !important;" class="big">Know more about us:</h3>
                <hr class='margin-line' />
                <h4 style="color: black !important;" class="small">MOWISAT CORPORATION AIMS TO COMMERCIALIZE SATELLITE BROADBAND AND TAILORED TECH SOLUTIONS.</h3>
            </div>

            <div class="col-md-1"></div>

        </div>

    </section>




    <section class='container-fluid big-box'>
        <div class='row'>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>

            <div class='col-xs-10 col-sm-10 col-md-10 team z-depth-4 card-panel'>
                <h2>Management</h2>
                <h3 style="text-align: left !important; padding: 0 0 0 10px !important;">Mowisat Corporation is formed by an experienced team with extensive expertise in telecommunications, satellite broadband operations, and management.</h3>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>
        </div>

        

        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box right'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>R.SCOTT ZIMMER</h3>
                    </div>

                    <div class='description'>
                        <p>President to the Board of Directors - Founder of LEAP, former Chairman of EchoStar Satellite Corporation and Vice Chairman of EchoStar Communications Corporation.</p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>STEVEN HOFFMAN</h3>
                    </div>

                    <div class='description'>
                        <p>CFO – Chief Financial Officer and Board Member for Mowisat. Director and Board Member of of Bridgemark Financial & Advisors Ltd., a boutique Private Equity & advisory firm with operations in Canada and London, UK. Entrepreneurial and founder of a collection of companies in the Renewable Energy, Encryption and Energy Storage companies (Both Private, Public).</p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>    


        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box right'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>VLATKO GIGOV</h3>
                    </div>

                    <div class='description'>
                        <p>COO - Formerly Officer for Economic affairs at UNOG Mission in Geneva. Has worked as project leader in charge of communications projects at Sovereign Solutions. Experienced in business development and telecommunications related projects</p>
                    </div>
                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>EMILIANO TERÁN</h3>
                    </div>

                    <div class='description'>
                        <p>CTO - Vast expirience in networks and programming, developing infrastructure and IT operations: network operations, application development and maintenance. Advance technology knowledge, competitive analysis, technology assassment, partnering and planning.</p>
                    </div>
                </div>    
            </div>

            <div class="col-md-1"></div>

        </div>

    </section>


    <section class='container-fluid'>
        <div class='row vision-sec'>
            <div class="col-md-1"></div>
            <div class='col-sx-12 col-md-7 vision-text'>
                <h2>Our Vision</h2>
                <hr class='margin-line' />
                <p>The Mowisat mission is to be the first to provide the highest speed satellite Internet broadband capacity to Mexico, in conjunction with a new satellite launch, Echostar XIX / Jupiter 2. Mowisat intends to capitalize on emerging markets growth opportunity, with it's unique access broadband enabled services, and to provide affordable communications.</p>
            </div>

            <div class='col-sx-12 col-md-3 image'>
                <img src="images/dish2.jpg" />
            </div>
            <div class="col-md-1"></div>
        </div>

    </section>


    <!-- ENDS CONTAINER SECTION -->


    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
