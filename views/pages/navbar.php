<!DOCTYPE html>
<?php 
if (!empty($_SESSION) ){
$userID=$_SESSION['id'];
}
?> 

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <!-- logo-->
                <div id="logo-strap><a class="navbar-brand" href=""><!--<img src ="views/images/logot.jpg">--></a></div>
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
      