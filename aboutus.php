<?php

    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Aboutus]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
    <title><?PHP echo $txt["aboutusTitle"]; ?></title>
    
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
                        <h1 style="font-weight: 200; color: white; margin: 0; padding-top: 100px;"><?PHP echo $txt["aboutusTitle"]; ?></h1>
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
            <h3 style="color: black !important;" class="big"><?PHP echo $txt["aboutusTxt1"]; ?></h3>
            <hr class='margin-line' />
            <h4 style="color: black !important;" class="small"><?PHP echo $txt["aboutusTxt2"]; ?></h3>
        </div>

            <div class="col-md-1"></div>

        </div>

    </section>




    <section class='container-fluid big-box'>
        <div class='row'>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>

            <div class='col-xs-10 col-sm-10 col-md-10 team z-depth-4 card-panel'>
                <h2><?PHP echo $txt["aboutusTxt3"]; ?></h2>
                <h3 style="text-align: left !important; padding: 0 0 0 10px !important;"><?PHP echo $txt["aboutusTxt4"]; ?></h3>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1"></div>
        </div>

        

        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

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

                    <div class='nombre'>
                    <h3>STEVE SCHAVER</h3>
                </div>

                <div class='description'>
                    <p>Member, Board of Directors - Former Chief Financial Officer of EchoStar Satellite Broadcasting Corporation and former President of EchoStar International Corporation, a subsidiary of Dish Network Corp (formerly EchoStar Communications Corporation). Former Chief Financial Officer of Dish Network, a holding
                    company of EchoStar Corp and Chief Operating Officer. 33 year career with EchoStar : served as a director on boards in Paris, Hong Kong, Denver, Cheseaux, and Mexico City.  Served for more than 8 years on the board of Dish Mexico for EchoStar.    </p>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>    

        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>CHRIS ERGEN</h3>
                    </div>

                    <div class='description'>
                        <p>CO-FOUNDER – Angel investor and an innovation advisor to startups. International business development for Dish. Extensive experience in satellite communications, mobile connectivity, and pay television around the globe.</p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>CHASE ERGEN</h3>
                    </div>

                    <div class='description'>
                        <p>Serial entrepreneur, philanthropist, consultant and expert in telecommunications, international relations, and innovation. Executive Director of Sovereign Solutions SA, leading company focused on governance strategy, business development solutions, risk management and foreign direct investment strategies. Formerly strategic Advisor for A Human Right, an international NGO, advocated for the expansion of economic opportunities through internet access and bridging the digital divide by expanding global satellite internet coverage.</p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>   



        <div class='row'>

            

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>DAVID MITCHELL</h3>
                    </div>

                    <div class='description'>
                        <p>BOARD OF DIRECTORS – 30 years of experience in financial industry; In the 90’s worked at a number of Bay street firms such as Canarim Securities ( now Canaccord), Levesque Beaubien Securities,  and Research Capital ( now Mackie Research Capital)  as a desk trader and as an investment advisor. In 2000 Mr Mitchell moved to Octagon Capital as a VP and Director managed the Toronto retail division and conducted financings for CPC’s, and small and microcap companies. Founder of the WhiteKnight series of Capital Pool Companies (3 have gone to market and listed on the TSXV). BOD member for two other CPC’s and the CEO and director in addition to 3 TSXV listed companies in the sectors of technology, healthcare and alternative finance. </p>
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

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='nombre'>
                        <h3>DR. ANTONIO ULISES DE LA GARZA VALDES</h3>
                    </div>

                    <div class='description'>
                        <p>SENIOR ADVICER OF THE BOARD OF DIRECTORS – Former member of the Council of Technological Transfer of the Autonomous University of Nuevo Leon. Participated in numerous government entities. Formerly Managing Directorof the Association of Information Technology Companies (AETI) and President and CEO of the North American International Trade Corridor Partnership (NAITCP). Holds a PhD in Philosophy with Specialization in Administration. Is developing The World Energy Services Integration and Investment Network (WESII Network).</p>
                    </div>
                </div>

            </div>


            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>DIEGO STEWART</h3>
                    </div>

                    <div class='description'>
                        <p>SALES DIRECTOR – Extensive management experience across multi-functional Commercial, Latin America and Sales. Experience in international markets and cultures. Competent in liaising, negotiating and reporting at B2B and Government level. Strong skills in process development and implementation, as well as analysis, strategy planning and staff development. </p>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>



        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

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

        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>EDER PEREZ</h3>
                    </div>

                    <div class='description'>
                        <p>PROJECT MANAGER - Specialized in social development, sustainability and technology with more than 9 years of experience volunteering and working in periurban, rural and urban communities. Educated in U.A.M, he is responsible to identify and create bonds with new communities for business opportunities, and generate links between social and technological organizations.</p>
                    </div>
                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>DAVID YAO</h3>
                    </div>

                    <div class='description'>
                        <p>BUSINESS DEVELOPMENT - Young talented executive with a diverse background in technology, business development strategies, market research, and financial economics. Trained as an economist at ITAM, Mexico, he is responsible for identifying new sales leads, pitching Mowisat´s services, and maintaining fruitful relationships with existing customers</p>
                    </div>
                </div>    
            </div>

            <div class="col-md-1"></div>

        </div>

        <div class='row'>

            <div class="col-md-1"></div>

            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>FABIOLA LOPEZ</h3>
                    </div>

                    <div class='description'>
                        <p>Industrial Design Clerk - Formerly Officer for Economic affairs at UNOG Mission in Geneva. Has worked as project leader in charge of communications projects at Sovereign Solutions. Experienced in business development and telecommunications related projects</p>
                    </div>
                </div>

            </div>



            <div class='col-xs-12 col-md-5 box left'>

                <div class="box-important z-depth-4 card-panel">
                    <div class='image'>
                        <img src="images/empresario.jpg" />
                    </div>

                    <div class='name'>
                        <h3>RICARDO ZEPEDA</h3>
                    </div>

                    <div class='description'>
                        <p>Marketing Communication Clerk - Recieved his education at the National Autonomous University of Mexico (UNAM) with studies in communications, marketing and advertisement. Experienced in Digital Marketing projects and self-thought programmer.</p>
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
