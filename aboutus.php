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

    <section class='container-fluid aboutus-pic' style="background-image: url('images/aboutus-sat.jpg')">
        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-10'>
                <h1>About us</h1>
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
                <h3 class="big">Know more about us:</h3>
                <hr class='margin-line' />
                <h4 class="small">MOWISAT CORPORATION AIMS TO COMMERCIALIZE SATELLITE BROADBAND AND TAILORED TECH SOLUTIONS.</h3>
            </div>

            <div class="col-md-1"></div>

        </div>

    </section>




    <section class='container-fluid team'>
        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-md-10'>
                <h2>Management</h2>
                <h3>Mowisat Corporation is formed by an experienced team with extensive expertise in telecommunications, satellite broadband operations, and management.</h3>
            </div>

            <div class="col-md-1"></div>
        </div>



        <div class='row'>
            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 president-box'>
                <div class='image'>

                </div>

                <div class='nombre'>
                    <h3>R.SCOTT ZIMMER</h3>
                </div>

                <div class='description'>
                    <p>President to the Board of Directors - Founder of LEAP, former Chairman of EchoStar Satellite Corporation and Vice Chairman of EchoStar Communications Corporation.</p>
                </div>

            </div>


            <div class='col-xs-12 col-md-5'>
                <div class='image'>

                </div>

                <div class='name'>
                    <h3>STEVEN HOFFMAN</h3>
                </div>

                <div class='description'>
                    <p>CFO – Chief Financial Officer and Board Member for Mowisat. Director and Board Member of of Bridgemark Financial & Advisors Ltd., a boutique Private Equity & advisory firm with operations in Canada and London, UK. Entrepreneurial and founder of a collection of companies in the Renewable Energy, Encryption and Energy Storage companies (Both Private, Public).</p>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>



        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5'>
                <div class='image'>

                </div>

                <div class='name'>
                    <h3>VLATKO GIGOV</h3>
                </div>

                <div class='description'>
                    <p>COO - Formerly Officer for Economic affairs at UNOG Mission in Geneva. Has worked as project leader in charge of communications projects at Sovereign Solutions. Experienced in business development and telecommunications related projects</p>
                </div>
            </div>


            <div class='col-xs-12 col-md-5'>
                <div class='image'>

                </div>

                <div class='name'>
                    <h3>EMILIANO TERÁN</h3>
                </div>

                <div class='description'>
                    <p>CTO - Vast expirience in networks and programming, developing infrastructure and IT operations: network operations, application development and maintenance. Advance technology knowledge, competitive analysis, technology assassment, partnering and planning.</p>
                </div>
            </div>

                <div class="col-md-1"></div>

        </div>
    </section>


    <section class='container-fluid'>
        <div class='row vision-sec'>
            <div class="col-md-1"></div>
            <div class='col-sx-12 col-md-7'>
                <h2>Our Vision</h2>
                <p>The Mowisat mission is to be the first to provide the highest speed satellite Internet broadband capacity to Mexico, in conjunction with a new satellite launch, Echostar XIX / Jupiter 2. Mowisat intends to capitalize on emerging markets growth opportunity, with it's unique access broadband enabled services, and to provide affordable communications.</p>
            </div>

            <div class='col-sx-12 col-md-3'>
            <div class="col-md-1"></div>
            </div>
        </div>

    </section>


    <!-- ENDS CONTAINER SECTION -->


    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
