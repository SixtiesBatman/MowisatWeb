<?php
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Partners]","Debug");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Our partners</title>

    <?PHP
        include ''.dirname(__FILE__).'/template/meta.php';
    ?>

    <link href="styles/partners.css" rel="stylesheet" type="text/css">

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
            <div class='col-xs-12 partners-img' style="top: 0; padding: 0; margin: 0; background-image: url('images/partners.jpg')">
                <div style="margin-top: 0px; height: 300px; background-color: black;  background: rgba(0,0,0,0.5)">
                    <h1 style="margin: 0; padding-top: 150px;">PARTNERS</h1>
                </div>
            </div>           
        </div>

    </section>    

    <section class='container-fluid'>
                
        <div class='row box-size blue'>

            <div class="col-md-1"></div>

            <div class='col-md-3 big-box'>

                <div>
                    <img src="images/hughes_logo.png" /> 
                </div>

            </div>    

            <div class="col-md-7 big-box">

                <div>
                    <p>HUGHES COMMUNICATIONS PROVIDES SATELLITE BROADBAND MANAGED NETWORK SERVICES AND DIGITAL MEDIA SOLUTIONS WORLDWIDE, WITH A PARTICULAR FOCUS TO DELIVERING BROADBAND AND EQUIPMENT SOLUTIONS TO RURAL REGIONS.</p>  
                    <a href="https://www.hughes.com/">
                        <button>More information</button>
                    </a>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>  
   

        <div class="row box-size">

            <div class="col-md-1"></div>
            
            
                    
            <div style="background-color: white !important;" class="col-md-7 black big-box">

                <div>
                    <p>PIG.GI IS A MARKETPLACE FOR CONSUMER DATA AND ENGAGEMENT. THROUGH PIG.GI COINS, THE APP WILL PROVIDE A WAY FOR PEOPLE TO ACCESS TO MOWISAT'S WI-FI NETWORKS.</p>
                    <a href="https://pig.gi/">
                        <button>More information</button>
                    </a>
                </div>    

            </div>


            <div class='col-md-3 logos big-box'>

                <div>
                <img src="images/piggi_logo.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
             
         


        </div>

       
        <div class="row box-size blue">

            <div class="col-md-1"></div>    
            
            <div class="col-md-3 big-box">

                <div>
                    <img src="images/stargo_logo.png" />
                </div>

            </div>                

            <div class="col-md-7 big-box">

                <div>
                    <p>STARGO PROVIDES SATELLITE INTERNET TO CLIENTS LOCATED IN AREAS OF DIFFICULT ACCESS. STARGO IS A STRATEGIC PARTNER WITH INFRASTRUCTURE, SALES AND INSTALLATION TEAMS SUPPORT.</p>
                    <a href="http://www.stargomexico.com/">
                        <button>More information</button>
                    </a>
                </div>

            </div>
  

            <div class="col-md-1"></div>

        </div> 
            
    </section>

    <!-- ENDS SECTION -->

    <!-- INITIATES FOOTER -->
    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>    
    <!-- ENDS FOOTER -->    

</body>

<html>