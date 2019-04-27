<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Gallery Styles>-->
        <link href="css/gallery.css" rel="stylesheet" type="text/css"/>
        <title>Travel Blog</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="views/bootstrap-4.1.3-dist/css/bootstrap.min.css">-->
        <link href="views/css/style.css" rel="stylesheet" type="text/css"/>      
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="views/css/fixed.css">   
        <!--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <link href="css/search.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="views/css/cookiealert.css" rel="stylesheet" type="text/css"/>
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
 
vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>-->
    </head>


    <body data-spy="scroll" data-target="#navbarResponsive">

        <!--- start home section --->
        <div id="home">

            <!-- start of nav -->
           <?php require_once 'views/pages/navbar.php';?>

            <!-- start landing page -->
            <div class="landing">
                <div class="home-wrap">
                    <div class="home-inner">

                    </div>
                </div>  
            </div>

            <div class="caption text-center">


                <?php require_once('routes.php'); ?>
                <?php require_once('views\socialMedia\mediaLinks.php');?>


            </div>

            <!-- end landing page -->


        </div>

        <!--- End home section --->

        <!--- start destination section --->

        <div id="destination" class="offset">

           <div class="col-12"> 
                <h1 class="text-center">Destinations
               </h1>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/croatia.jpg" alt="Lake in Croatia">
    <div class="card-header"><h3>Top ten Croatian islands</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=93" class="stretched-link card-title">Croatia provides the perfect opportunity for island-hopping. Find your ideal getaway here</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/miami-post.jpg" alt="Miami skyline">
    <div class="card-header"><h3>48 hours in... Miami</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=94" class="stretched-link card-title">South Beach is usually the first thing people think of when it comes to Miami - but there's a lot more to the city than that</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/amalfi-post.jpg" alt="Amalfi coastline">
    <div class="card-header"><h3>Expert guide to the Amalfi Coast</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=96" class="stretched-link card-title">The legendary Amalfi Coast is one of Europe's most desirable and romantic destinations. Don't miss our top tips</a>
     </div>
    </div>
</div>
 </div>      
 </div>    
               <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=1 ">Read more articles
                   
               </a></div>
         
        </div>
        </div>
        <!--- End destination section --->

        <!--- start eco travel section --->
        <div id="ecoTravel" class="offset">    

            <div class="jumbotron">
        <!--        <div class="narrow text-center">-->

                    <div class="col-12">
                        <h3 class="heading text-center">EcoTravel</h3>
                        <div class="heading-underline"></div>
                    </div>   
<div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/holiday destinations that are saving the planet.jpeg" alt="Lake and flowers in Switzerland">
    <div class="card-header"><h3>Holiday destinations that are saving the planet</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=112" class="stretched-link card-title">We take a tour of the world’s most eco-friendly destinations</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/HOW TO TRAVEL PLASTIC-FREE.jpg" alt="Plastic bottles">
    <div class="card-header"><h3>How to travel plastic-free</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=103" class="stretched-link card-title">You can reduce how much single use plastic you consume while travelling through a bit of preparation</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/Ecotourism in Costa Rica.jpeg" alt="Costa Rica beach">
    <div class="card-header"><h3>Ecotourism in Costa Rica</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=113" class="stretched-link card-title">Costa Rica has devoted an estimated 26% of its land to national parks</a>
     </div>
    </div>
</div>
 </div>      
 </div>   
           <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=2 ">Read more articles</a></div>       
                </div>
            </div>
      <!--  </div>-->
        <!--- End eco travel section --->

        <!--- start family travel section --->
        <div id="familyTravel" class="offset">

    <div class="fixed-background">        

                <div class="row dark"> 

                    <div class="col-12">
                        <h3 class="heading text-center">Family travel</h3>
                        <div class="heading-underline"></div>
                    </div>  
 
<div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/FAMILY HOLIDAY HEAVEN.jpg" alt="Welsh shipping container">
    <div class="card-header"><h3>Family holiday heaven</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=98" class="stretched-link card-title">How we found holiday bliss in a Welsh shipping container</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/SUN, SEA AND LEGOLAND.jpeg" alt="Dubai skyline">
    <div class="card-header"><h3>Sun, sea and Legoland in Dubai</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=97" class="stretched-link card-title">Why Dubai is the perfect family holiday destination</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/ibiza-post.jpg" alt="Ibiza coastline">
    <div class="card-header"><h3>A yoga retreat with toddlers</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=95" class="stretched-link card-title">The Ibiza retreat designed for mothers and their young children</a>
     </div>
    </div>                   
</div>             
  </div>  
  <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=3 ">Read more articles</a></div>                        
 </div>  
                   
 </div>  

 </div>         
   </div>                    
    <!--   CONTENT FROM VIDEO TUTORIAL - NOW USING CARDS ABOVE            
   <div class="col-md-4">
                        <h3>More on family travel</h3>
                        <div class="feature">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                    </div>

                    <div class="col-md-4">
                        <h3>More on family travel</h3>
                        <div class="feature">
                            <i class="fas fa-bold fa-3x"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                    </div>  

                    <div class="col-md-4">
                        <h3>More on family travel</h3>
                        <div class="feature">
                            <i class="fab fa-css3 fa-3x"></i>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                    </div>  
                </div>

                <div class="fixed-wrap">
                    <div class="fixed">

                    </div>
                </div>  
            </div>  -->        

        <!--- End family travel section --->


        <!--- start inspiration section --->
        <div id="inspiration" class="offset">

            <div class="jumbotron">

                <div class="col-12 text-center">
                    <h3 class="heading">Inspiration</h3>
                    <div class="heading-underline"></div>
                </div>  

      <div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/SARDINIA'S GRAND CANYON.jpeg" alt="Sardinia canyon">
    <div class="card-header"><h3>The grand canyon of Europe</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=99" class="stretched-link card-title">Up for a challenge? Try hiking this rocky ravine</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/Three desert holidays you must try.jpeg" alt="Night sky over desert">
    <div class="card-header"><h3>Three desert holidays you must try</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=100" class="stretched-link card-title">Escape the crowds in these otherworldly landscapes</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/WHERE TO GO ON YOUR HONEYMOON.jpg" alt="Hammock on beach">
    <div class="card-header"><h3>Honeymoon hotspots</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=101" class="stretched-link card-title">We check out the best destinations for romance</a>
     </div>
    </div>                   
</div>             
  </div> 
          <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=4 ">Read more articles</a></div>                    
 </div>           
            </div>

        <!--- start practical tips section --->
        <div id="practicalTips" class="offset">    

            <div class="jumbotron">
    <!--            <div class="narrow text-center">-->

                    <div class="col-12">
                        <h3 class="heading text-center">Practical tips</h3>
                        <div class="heading-underline"></div>
                    </div>  
                    
        <div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/FAMILY HOLIDAY PACKING LIST.jpg" alt="Family at airport">
    <div class="card-header"><h3>Family holiday packing list</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=105" class="stretched-link card-title">Don't leave home without these essential items</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/HOW TO SURVIVE A LONG CAR JOURNEY WITH CHILDREN.jpg" alt="Childen in car">
    <div class="card-header"><h3>How to survive a long car journey with kids</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=106" class="stretched-link card-title">Don't miss these essential tips for those long car journeys this summer</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/HOW TO CHOOSE THE PERFECT TRAVEL COMPANIO.jpg" alt="Two women taking selfie">
    <div class="card-header"><h3>How to choose the perfect travel companion</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=114" class="stretched-link card-title">Avoid conflict by asking these five questions before you set off</a>
     </div>
    </div>
</div>
 </div> 
                      <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=5 ">Read more articles</a></div> 
 </div>                    

           <!--old layout         <div class="row">

                        <div class="col-md-4">
                            <div class="feature">
                                <i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
                                <h3>Custom Animation</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                            </div>                      
                        </div>

                        <div class="col-md-4">
                            <div class="feature">
                                <i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
                                <h3>Content slider</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                            </div>                      
                        </div>

                        <div class="col-md-4">
                            <div class="feature">
                                <i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
                                <h3>Contact form</h3>
                                p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                            </div>                      
                        </div>

                    </div>      -->       
                </div>
            </div>
        

            

</body>
      <!--  </div> -->


        <!--- End practical tips section --->

        <!-- Footer -->
        <div id="contact" class="offset">
            <footer>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                      <!--image to be added <img src="">-->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p> 
                        <strong>Contact info  </strong>
                        <p>99999<br>email address</p>
                        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

                    <hr class="socket">
                    &copy; Blog theme.

                </div>
            </footer>
        </div>

        <!-- End of footer -->

<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        I agree
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->

        <!--- Script Source Files -->
      
      <script src="views/JS/js.js" type="text/javascript"></script>
       <script src="views/JS/jquery-3.3.1.min.js"></script>
       <script src="views/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
       <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
       <script src="views/JS/cookiealert.js" type="text/javascript"></script>
        <!--- End of Script Source Files -->


    </body>

</html>