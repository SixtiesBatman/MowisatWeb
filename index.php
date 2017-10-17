<?php

    include ''.dirname(__FILE__).'/scripts/utils/idiom.php';
    include ''.dirname(__FILE__).'/scripts/utils/log.php';
    
    $log = new LoggerPhp();
    $log->write_log("[Index]","Debug");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mowisat Corporation</title>

        <?PHP
            include ''.dirname(__FILE__).'/template/meta.php';
        ?>

        <style>
            a {color: gray}
            a:hover {text-decoration: none; color: gray};
        </style>

    </head>
    <body>   

    <?PHP
        include ''.dirname(__FILE__).'/template/header.php';
    ?>

    <!-- INITIATES SLIDER -->        
    <section class="jumbotron" style="padding-top: 0; margin-top: 0; height: 600px !important; margin-bottom: 0; background-image: url('images/tablet3.jpg')">

        <div style="margin-right: 0; margin-top: 0px; height: 600px; background-color: black;  background: rgba(0,0,0,0.5)" class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div style="margin-top: 6em !important; " class="big-title">
                    <h1 style="font-weight: 200; color: white; margin: 0; padding-top: 0px;"><?PHP echo $txt["propuestaDeValor"]; ?></h1>
                </div>
                
                <div class="little-text">
                    <h3 style="font-weight: 200; color: white; margin: 0; padding-top: 50px;"><?PHP echo $txt["descripcionPropuestaDeValor"]; ?></h3>
                </div>
                
                
                <div class="lrn-more-btn">
                    <a href="how-works.php">
                        <button style="color: white;">LEARN MORE</button>
                    </a>
                </div>   
                
            </div>
                
            <div class="col-sm-1"></div>
        </div>

    </section>    
    
    <!-- ENDS SLIDER -->
    
    <!-- CONTAINERS SECTION BEGINS -->
    
        <!-- INITIATES INFO-BAR -->
    
        <section class="container-fluid info-bar">
            
            <!-- FIRST INFO-BAR LINE -->
            <div class="row">
                
                <div class="col-sm-2"></div>
                
                <div class="col-sm-4 inline-box">
                    <div><img src="images/icon1.png" alt="schedular" />Schedular</div>
                    <div><img src="images/icon2.png" alt="IoT" />IoT Real Time View</div>
                </div>
                <div class="col-sm-4 inline-box">
                    <div><img src="images/icon4.png" alt="Wi-Fi" />Wi-Fi Hotspots</div>
                    <div><img src="images/icon5.png" alt="education" />Online Education Platforms</div>                
                </div>
                
                <div class="col-sm-2"></div>
                
            </div>
                    
          
        </section>
    
    
        <!-- ENDS INFO-BAR -->
    
    
    
        
        <!-- INITIATES CONTACT US BOX -->
        
        <section class="container contact-us-box">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Contact Us</h4>
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            Name<font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="nameContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            Mobile Number<font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="numberContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            E-Mail<font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <input id="emailContact" value="" type="text" style="background-color: #DADADA;" class="form-control" />
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="col-md-12">
                        <div class="col-md-6">
                            Comments<font color="red">*</font>
                        </div>
                        <div class="col-md-6">
                            <textarea id="commentContact" value="" style="background-color: #DADADA; height: 150px;" class="form-control"></textarea>
                    
                        </div>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;" class="col-md-12 text-center">
                       <button onclick="sendContact();" id="sendContact" class="btn btn-primary"><i style="font-family: 'fontawesome' !important; font-size: 1em;" class="fa fa-paper-plane" aria-hidden="true"></i> Send</button> 
                    </div>
                </div>
                
                <div class="col-sm-6 text-center">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.965285898797!2d-79.38306128450236!3d43.64889057912149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cd578a5c61%3A0xea0589912e09cc06!2sFirst+Canadian+Place%2C+Toronto%2C+ON%2C+Canad%C3%A1!5e0!3m2!1ses-419!2smx!4v1507737368429" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
            
        </section>
        
        
    
        <!-- ENDS CONTACT US BOX -->
    
    
    
    
    
        <!-- INITIATES BLOG BOX -->
        
        <!-- FIRST BLOG BOX -->
        <section class="container-fluid blog-box">
            <div class="row">
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-5 blog-new">
                    <h4 class="margin">BLOG</h4>
                    <h5 class="blue" id="titleBlog">Loading....</h5>
                    <p class="blog-p padding-right" id="contentBlog"></p>
                    <a style="display: none;" href="" id="readBlog">
                        <button>Read more</button>
                    </a>
                </div>
                
                
                
        <!-- SECOND BLOG BOX -->        
                <div style="margin-bottom: 20px;" class="col-sm-5 blog-second">
                    <p class="blog-p margin padding-left">Mowisat Corporation is a company which works with satellite internet connectivity
to deliver digital services and versatile platforms for human capacity
development to different sectors, industries, and sociocultural initiatives
such as marginalized communities. Mowisat Corporation is a company which
works with satellite internet connectivity to deliver digital services and versatile
platforms for human capacity development to different sectors, industries,
and sociocultural initiatives such as marginalized communities.</p>
                    <div>
                        
                            <div class="">
                                <img src="images/name-location.png" />
                            </div>
                         
                        
                    </div>
                </div>
        
                <div class="col-sm-1"></div>
                 
            </div>
        </section>
        
        <!-- ENDS BLOG BOX -->
        
        
        <!-- INITIATES WORK WITH US BOX -->
        
        <section class="container-fluid work-with-us-box">
            <div>
                <h4 style="color: #3e3e3f !important;" class="work-title">WANTS TO WORK WITH US?</h4>
            </div>
            
            <div style="color: #3e3e3f !important;" class="vacancies-btn">
                <a href="careers.php">
                    <button style="color: #3e3e3f !important;">See our vacancies</button>
                </a>
            </div>
        </section>
        <!-- ENDS WORK WITH US BOX -->
    
    <!-- CONTAINERS SECTION ENDS -->

    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
