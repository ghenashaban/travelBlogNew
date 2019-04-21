<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Blog</title>
	<link rel="stylesheet" href="views/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link href="views/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link rel="stylesheet" href="views/css/fixed.css"/>   
<!--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<link href="views/css/search.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="views/css/cookiealert.css" rel="stylesheet" type="text/css"/>
</head>


<body data-spy="scroll" data-target="#navbarResponsive">
   
<!--- start home section --->
<div id="home">
    
 <!-- start of nav -->
 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="#">Logo</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
     <span class="navbar-toggler-icon"></span>   
 </button>
 <!-- change href to controller/action and remove divs -->
 <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
         <li class="nav-item">
             <a class="nav-link" href="index.php">Home</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link"  href="?controller=user&action=readAll" >Admin</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link"  href="?controller=post&action=readAll" >View all articles</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link"  href="#destination" >Destination</a>
             </li>
             <li class="nav-item">
             <a class="nav-link" href="#ecoTravel">Eco Travel</a>
             </li>
             <li class="nav-item">
             <a class="nav-link" href="#familyTravel">Family Travel</a>
             </li>
             <li class="nav-item">
             <a class="nav-link" href="#inspiration">Inspiration</a>
             </li>
             <li class="nav-item">
             <a class="nav-link" href="#practicalTips">Practical Tips</a>
             </li> 
         <?php 
 if(!empty($_SESSION)){
           echo' <a href="?controller=user&action=logout">  <button class="button"><i class="material-icons">
                        lock
                     </i> <br>log out </button> </a>';
 }else {
  echo' <a href="?controller=user&action=login">  <button class="button"><i class="material-icons">
                        lock_open
                     </i> <br>log in </button> </a>';   
 }
            
 ?>
             
             <a href="?controller=user&action=register">
             <button class="button"><i class="material-icons">
              person_add
                 </i> <br>sign up </button> </a>
           

     </ul> 
        
 </div>
 </nav>
 <!-- end of nav -->  

 <!-- start landing page -->
 <div class="landing">
     <div class="home-wrap">
         <div class="home-inner">
     
         </div>
     </div>  
 </div>
 
 <div class="caption text-center">
   
      <?php require_once('routes.php'); ?>
       
    
 
 </div>

 <!-- end landing page -->
    
</div>
     
<!--- End home section --->

<!--- start destination section --->

<div id="destination" class="offset">
    
    <div class="col-12 narrow text-center">
        <h1>Here are our latest destination articles</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <a class="btn btn-secondary btn-md" href="#">Find out more</a>
        
</div>    
</div>
<!--- End destination section --->

<!--- start eco travel section --->
<div id="ecoTravel" class="offset">    
    
    <div class="jumbotron">
        <div class="narrow text-center">
            
            <div class="col-12">
                <h3 class="heading">EcoTravel</h3>
                <div class="heading-underline"></div>
        </div>   
            
            <div class="row">                
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
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>                       
                     </div>                      
        </div>
            
</div>             
</div>
</div>
</div>
<!--- End eco travel section --->

<!--- start family travel section --->
<div id="familyTravel" class="offset">

    <div class="fixed-background">
        
        <div class="row dark text-center"> 
        
        <div class="col-12">
                <h3 class="heading">Family travel</h3>
                <div class="heading-underline"></div>
        </div>  
        
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
 </div>  
</div>

<!--- End family travel section --->

<!--- start inspiration section --->
<div id="inspiration" class="offset">
  
    <div class="jumbotron">
    
           <div class="col-12 text-center">
                <h3 class="heading">Inspiration</h3>
                <div class="heading-underline"></div>
        </div>  
        
        <div class="row">
            <div class="col-md-6 clients">
                <div class="row">
                <div class="col-md-4">
                    <img src="images/client1.png">
                </div>
                    <div class="col-md-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                            <hr class="clients-hr">
                            <cite>&#8212; Some dummy text</cite>
                        </blockquote>
    </div>
                            </div>
</div>
 
        <div class="col-md-6 clients">
                <div class="row">
                <div class="col-md-4">
                    <img src="images/client1.png">
                </div>
                    <div class="col-md-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                            <hr class="clients-hr">
                            <cite>&#8212; Some dummy text</cite>
                        </blockquote>

    </div>
                            </div>

</div>
</div> 
</div>
    
    <div class="col-12 narrow text-center">
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</p>
        <a class="btn btn-secondary btn-md" href="#">Find out more</a>
    </div>
    </div>
<!--- End inspiration section --->

<!--- start practical tips section --->
<div id="practicalTips" class="offset">    
    
    <div class="jumbotron">
        <div class="narrow text-center">
            
            <div class="col-12">
                <h3 class="heading">Practical tips</h3>
                <div class="heading-underline"></div>
        </div>   
            
            <div class="row">
                
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
            
</div>             
</div>
</div>
</div> 


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
    &copy; Blog theme
     
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
<script src="JS/js.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="views/JS/cookiealert.js"></script>
<!--- End of Script Source Files -->

</body>
</html>