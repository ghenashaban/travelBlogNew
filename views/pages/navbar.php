<!DOCTYPE html>
<?php 
if (!empty($_SESSION) ){
$userID=$_SESSION['id'];
}
?> 

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <!-- logo-->
                <div id="logo-strap><a class="navbar-brand" href=""><svg xmlns="http://www.w3.org/2000/svg" id="suitcase_icon" viewBox="0 0 240 192" width="90" height="50">
  <title>suitcase icon</title>
  <style type="text/css">
    *         {stroke: none;}
    #suitcase {fill: red;}
      .body     {}
    .sides    {}
    #left     {fill: #1ebba3}
    #middle   {fill: #1ebba3}
    #right    {fill: #1ebba3}
    #handle   {fill: #1ebba3}
  </style>
  <g id="suitcase">
    <path id="left" class="body sides" d="m  40,32 0,160 -16,0          a  24,24 0 0 1 -24,-24 l 0,-112          a  24,24 0 0 1  24,-24 z"/>
    <rect id="middle" class="body" x="48" y="32" width="144" height="160"/>
 
    <path id="right" class="body sides" d="m 200,32 16,0          a  24,24 0 0 1  24,24  l 0,112          a  24,24 0 0 1 -24,24  l -16,0 z"/>
    <path id="handle" d="m  84,30 0,-12          a  18,18 0 0 1 18,-18 l 36,0          a  18,18 0 0 1 18,18  l 0,12 -12,0 0,-12          a   6,6  0 0 0 -6,-6  l -36,0          a   6,6  0 0 0 -6,6   l 0,12 z"/>
  </g>
</svg>Joined at<br>the trip<!--end of logo--><!--<img src ="views/images/logot.jpg">--></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>   
                </button>
                <!-- change href to controller/action and remove divs -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <?php 
                        if (!empty($_SESSION) ){
                        if ( $_SESSION["role"]=="Admin"){
                         echo' <li class="nav-item">
                            <a class="nav-link"  href="?controller=user&action=readAll" >View all Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="?controller=post&action=readAll" >View all articles</a>
                        </li>;
                          <li class="nav-item">
                            <a class="nav-link"  href="?controller=post&action=create" >Create new article</a>
                        </li>;
                         <li class="nav-item">
                            <a class="nav-link"  href="?controller=user&action=registerAdmin" >Add new blogger</a>
                        </li>';
                        
                            
                        } }?>
                       
                        <?php if (empty($_SESSION) || ($_SESSION["role"]=="User") )
                            {echo'<li class="nav-item">
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
                            <a class="nav-link" href="views/pages/gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#practicalTips">Practical Tips</a>
                        </li> ' 
                            ;} ?>
                        
                        </ul> 
                        <?php if (!empty($_SESSION['username'])){
                            echo' <div class="dropdown">
  <button class="dropbtn" class="button">
<i class="material-icons md-48"> account_circle </i></button>
  <div class="dropdown-content">
  


<a href="?controller=user&action=readAccount&id='.$userID.'"> <button class="button"><i class="material-icons md-436">
                        edit
                     </i> <br>Details</button> </a>

  <a href="?controller=user&action=logout"> <button class="button"><i class="material-icons md-36">
                        lock
                     </i> <br>log out </button> </a>
  
  
  </div>
</div>';
                        }else{
                           
                            echo'
                                
<div class="dropdown">
  <button class="dropbtn" class="button">
<i class="material-icons md-48"> account_circle </i></button>
  <div class="dropdown-content">
  
<a href="?controller=user&action=login">  <button class="button"><i class="material-icons">
                        lock_open
                     </i> <br>log in </button> </a>
                            <a href="?controller=user&action=register">
                            <button class="button"><i class="material-icons">
                                    person_add
                                </i> <br>sign up </button> </a>';
                        }?>

               
 
                    

                </div>
            </nav>
      