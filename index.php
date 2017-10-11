<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mowisat Corporation</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="images/favicon_mowisat.png">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="styles/bootstrap.css">

        <!-- jQuery library -->
        <script src="js/jquery.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="js/bootstrap.js"></script>


        <script src="js/toastr.js"></script>
        <link rel="stylesheet" href="styles/toastr.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <link rel="stylesheet" href="styles/font-awesome.css">
        <link rel="stylesheet" href="styles/fonts-apply.css">
        

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
        <header class="container-fluid">
        <!-- FIRST PART OUT OF 3 OF THE HEADER -->    
            <nav class="row dots" style="background-image: url('images/blue-dots.jpg')">
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-10">
                    
                    <div class="login-btn">
                        <button>Login</button>
                    </div>
                        
                </div>
                
                <div class="col-sm-1"></div>
                
            </nav>
        
        <!-- SECOND PART OUT OF 3 OF THE HEADER -->
            <div class="row">
                
                <nav style="margin-bottom: 0 !important; border: 0 !important; background-color: #FFF !important; border-radius: 0 !important;" class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button style="background-color: black;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        <a class="header-two" href="#">
                            <img src="images/mowisat-corp-logo.png" alt="mowisat corp logo" />        
                        </a>
                      </div>
                      <div style="border: 0 !important;" class="collapse navbar-collapse" id="myNavbar">
                        <ul style="margin: 1.2em 0 0 0 !important;" class="nav navbar-nav navbar-right nav-style-header">
                            <li><a style="color: black;" href="#">satellite broadband</a></li>
                            <li><a style="color: black;" href="#">social responsability</a></li>
                            <li><a style="color: black;" href="#">news</a></li>
                            <li><a style="color: black;" href="#">investors</a></li>
                            <li class="hidden-xs hidden-sm round"><a style="color: black;" href="#">EN</a></li>
                            <li class="hidden-xs hidden-sm round"><a style="color: black;" href="#">ES</a></li></ul>
                      </div>
                    </div>
                  </nav>
                
            </div>    
        
        <!-- THIRD PART OUT OF 3 OF THE HEADER -->  
            
            <nav class="row header-three-style">
                <div id="third-header">

                    <div class="col-xs-12 col-sm-4 col-md-4 style-box">
                        <div class="inline-display"><img src="images/icon7.png" alt="question mark" />why mowisat?</div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 style-box">
                        <div class="inline-display"><img src="images/icon8.png" alt="gears" />how it works?</div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 style-box">
                        <div class="inline-display"><img src="images/icon9.png" alt="partners" />our partners</div>
                    </div>

                </div>
            </nav>
            
        </header>
    <!-- ENDS HEADER -->    


    <!-- INITIATES SLIDER -->        
    <section class="jumbotron" style="margin-bottom: 0; background-image: url('images/tablet3.jpg')">
        
        <div class="row">
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
    



    <!-- INITIATES FOOTER -->
    
    <footer class="footer">
        
        <div class="row">
            <div class="col-sm-12 social-network">
                <ul>
                    <li><div class="logos-sm1"><a href="#"><img src="images/twitter-logo.png" alt="twitter" />@MowisatCorp</a></div></li>
                    <li><div class="logos-sm"><a href="#"><img src="images/fb-logo.png" alt="facebook" />Facebook.com/MowisatCorporation</a></div></li>
                    <li><div class="logos-sm2"><a href="#"><img src="images/linkedin-logo.png" alt="linkedin" />Linkedin</a></div></li>
                </ul>    
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-2 other-list">
                <ul>
                    <li class="blue-letter">Meet Mowisat</li>
                    <li>Mision</li>
                    <li>Vision</li>
                    <li>Our team</li>
                    <li>Section partners</li>
                </ul>
            </div>
            
            <div class="col-sm-2">
                <div class="blue-letter special">NEWS</div>
                <div class="blue-letter special">CARRERS</div>
                
            </div>
            
            <div class="col-sm-3">
                <div class="blue-letter">STAY IN TOUCH</div>
                <div class="special2">info@mowisatcorp.com</div>
                <div class="blue-letter">Canada</div>
                <div class="last-paragraph">First Canadian Place<br />
                    100 King Street West Suite 5700<br />
                    Toronto, ON<br />
                    M5X 1C7</div>
            </div>
            
            <div class="col-sm-3">
             
                    
                <div class="blue-letter mexico">Mexico</div>
                <div class="last-paragraph">Mowisat Corporation<br />
                     Mexico City, Mexico<br />
                     Calle Bahía de las Palmas 1 Verónica Anzures<br />
                     113000, Ciudad de México, CDMX</div>
               
            </div>
            
            <div class="col-sm-1"></div>
            
        </div>
           
        
        
        <div class="row">
                <nav class="col-sm-12" id="other-links">
                    <ul>
                        <li><a href="#">2017 Mowisat Corporation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Policies and Terms</a></li>
                    </ul>
                </nav>
        </div>    
    </footer>    
    <!-- ENDS FOOTER -->
    </body>
</html>
