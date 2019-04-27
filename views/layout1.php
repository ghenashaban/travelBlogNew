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

<!--All 5 content sections were here-->
       

        

        
        








<!--footer-->
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