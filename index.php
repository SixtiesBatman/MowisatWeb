<?php
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

        <script>

            function sendContact(){
                //alert("entro");
                console.log("entro");
                console.log(document.getElementById("nameContact").value);
                console.log($("#nameContact").val());
                console.log($("#numberContact").val());
                console.log($("#emailContact").val());
                console.log($("#commentContact").val());

                if($("#nameContact").val()==""){
                    toastr["error"]("Write your name", "");
                } else if($("#numberContact").val()==""){
                    toastr["error"]("Write your number", "");

                }  else if($("#emailContact").val()==""){
                    toastr["error"]("Write your email", "");

                }  else if($("#commentContact").val()==""){
                    toastr["error"]("Write your comments", "");

                } else {
                    //ajax
                    
                    $.ajax({  url : "scripts/dao/contacto.php",
                              type : "post",
                              data : {  nameContact : $("#nameContact").val(),
                                        numberContact : $("#numberContact").val(),
                                        emailContact: $("#emailContact").val(),
                                        commentContact: $("#commentContact").val()
                              },
                              success : function(data) {
                                  console.log("se envio");
                                  var response = JSON.parse(data);
                                  console.log(response);
                                  if(response.success=="true"){
                                    toastr["success"]("We have recieved you data. we will contact you soon.", "");
                                  } else {
                                    toastr["error"](response.description, "");
                                  }
                              },
                              error : function(response) {
                                toastr["error"]("Error you dont have internet", "");
                              }
                    });
                    

        
                }

            }
            function getLastPostBlog(){
                    //ajax
                    
                    $.ajax({  url : "scripts/dao/getLastPostBlog.php",
                              type : "post",
                              success : function(data) {
                                  console.log("se envio");
                                  var response = JSON.parse(data);
                                  console.log(response);
                                  if(response.success=="true"){
                                    console.log(response);

                                    var readBlog = response.guid.split("/blog/");

                                    $("#titleBlog").html(response.title);
                                    $("#contentBlog").html(response.content + "...");
                                    $("#readBlog").attr("href","blog/" + readBlog[1]);
                                  } else {
                                  }
                              },
                              error : function(response) {
                                toastr["error"]("Error you dont have internet", "");
                              }
                    });

            }


            $( document ).ready(function() {
            // Handler for .ready() called.
                getLastPostBlog();
            });
        </script>

    </head>
    <body>   

    <?PHP
        include ''.dirname(__FILE__).'/template/header.php';
    ?>

    <!-- INITIATES SLIDER -->        
    <section class="jumbotron" style="margin-bottom: 0; background-image: url('images/tablet3.jpg')">
        
        <div style="margin-right: 0;" class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="big-title">
                    <h1>Connecting anything,<br/>Anywhere.</h1>
                </div>
                
                <div class="little-text">
                    <h3>Mowisat Corporation commercializes Satellite<br/>
                        Broadband in Latin America for versatile use.<br/>
                        Powered by cutting edge connectivity solutions<br/>
                        for business processes optimization.</h3>
                </div>
                
                
                <div class="lrn-more-btn">
                <button>LEARN MORE</button>
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
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-5">
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
                       <button onclick="sendContact();" id="sendContact" class="btn fa fa-paper-plane"> Send</button> 
                    </div>
                </div>
                
                <div class="col-sm-5 text-center">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.965285898797!2d-79.38306128450236!3d43.64889057912149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cd578a5c61%3A0xea0589912e09cc06!2sFirst+Canadian+Place%2C+Toronto%2C+ON%2C+Canad%C3%A1!5e0!3m2!1ses-419!2smx!4v1507737368429" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
                <div class="col-sm-1"></div>
                
            </div>
            
        </section>
        
        
    
        <!-- ENDS CONTACT US BOX -->
    
    
    
    
    
        <!-- INITIATES BLOG BOX -->
        
        <!-- FIRST BLOG BOX -->
        <section class="container-fluid blog-box">
            <div class="row">
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-5 blog-new">
                    <h4  class="margin">BLOG</h4>
                    <h5 class="blue" id="titleBlog">Loading....</h5>
                    <p class="blog-p padding-right" id="contentBlog"></p>
                    <a href="" id="readBlog">
                        <button>Read more</button>
                    </a>
                </div>
                
                
                
        <!-- SECOND BLOG BOX -->        
                <div class="col-sm-5 blog-second">
                    <p class="blog-p margin padding-left">Mowisat Corporation is a company which works with satellite internet connectivity
to deliver digital services and versatile platforms for human capacity
development to different sectors, industries, and sociocultural initiatives
such as marginalized communities. Mowisat Corporation is a company which
works with satellite internet connectivity to deliver digital services and versatile
platforms for human capacity development to different sectors, industries,
and sociocultural initiatives such as marginalized communities.</p>
                    <div>
                        <div></div>
                        
                            <div class="blue padding-left">Name</div><div class="padding-left">Location</div>
                         
                        
                    </div>
                </div>
        
                <div class="col-sm-1"></div>
                 
            </div>
        </section>
        
        <!-- ENDS BLOG BOX -->
        
        
        <!-- INITIATES WORK WITH US BOX -->
        
        <section class="container-fluid work-with-us-box">
            <div>
                <h4 class="work-title">WANNA WORK WITH US?</h4>
            </div>
            
            <div style="color: black !important;" class="vacancies-btn">
                <button style="color: black !important;">See our vacancies</button>
            </div>
        </section>
        <!-- ENDS WORK WITH US BOX -->
    
    <!-- CONTAINERS SECTION ENDS -->

    <?PHP
    include ''.dirname(__FILE__).'/template/footer.php';
    ?>
