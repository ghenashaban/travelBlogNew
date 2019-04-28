<!DOCTYPE html>
  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Blog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="views/bootstrap-4.1.3-dist/css/bootstrap.min.css">-->
        <link href="views/css/style.css" rel="stylesheet" type="text/css"/>      
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="views/css/fixed.css">   
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
       
<?php 

require_once 'views/pages/homepage-sections.php';

?>
        

        
        







       
        
      

        
        


      

      

 




     

      
       
       

<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        I agree
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->
  
        <!--- Script Source Files -->
      
        <!--script src="views/JS/js.js" type="text/javascript"></script-->
        <script src="views/JS/jquery-3.3.1.min.js"></script>
        <script src="views/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
        <script src="views/JS/cookiealert.js" type="text/javascript"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="views/JS/typeahead.js" type="text/javascript" ></script>

        <!--- End of Script Source Files -->


    </body>

</html>