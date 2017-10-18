<?php
    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
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
            <div class='col-xs-12 partners-img bgMeshParent' style="background-image: url('images/partners.jpg')">
                <div class="bgMesh">
                    <h1 style="margin: 0; padding-top: 150px;"><?PHP echo $txt["part-ners"]; ?></h1>
                </div>
            </div>           
        </div>

    </section>    

    <section class='container-fluid'>
                
        <div class='row box-size'>

            <div class="col-md-1"></div>

            <div class='col-md-3 big-box logos'>

                <div>
                    <img src="images/hughes_logo.png" /> 
                </div>

            </div>    

            <div class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["hughes"]; ?></p>  
                    <a href="https://www.hughes.com/">
                        <button class="black-b"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>  
   

        <div class="row box-size blue">

            <div class="col-md-1"></div>
            
            
                    
            <div  class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["stargo"]; ?></p>
                    <a href="http://www.stargomexico.com/">
                        <button><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>

            </div>


            <div class='col-md-3 logos big-box'>

                <div>
                    <img src="images/stargo_logo.png" />
                </div>

            </div>

            <div class="col-md-1"></div>
             
         


        </div>

       
        <div class="row box-size">

            <div class="col-md-1"></div>    
            
            <div class="col-md-3 big-box logos">

                <div>
                    <img src="images/piggi_logo.png" />
                </div>

            </div>                

            <div class="col-md-7 big-box">

                <div>
                    <p><?PHP echo $txt["piggi"]; ?></p>
                    <a href="https://pig.gi/">
                        <button class="black-b"><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div> 

            </div>
  

            <div class="col-md-1"></div>

        </div> 


        <div class="row box-size blue">

            <div class="col-md-1"></div>
            
            
                    
            <div class="col-md-7 big-box">

                <div>
                    <p style="text-transform: uppercase"><?PHP echo $txt["net"]; ?></p>
                    <a href="https://www.netfreedompioneers.org/">
                        <button><?PHP echo $txt["botonMasInfo"]; ?></button>
                    </a>
                </div>    

            </div>


            <div class='col-md-3 logos big-box'>

                <div>
                <img src="images/net.png" />
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