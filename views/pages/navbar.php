<!DOCTYPE html>
<?php 
if (!empty($_SESSION) ){
$userID=$_SESSION['id'];
}
?> 

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <!-- logo-->
            <div><a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" height="65pt" version="1.1" viewBox="0 0 1152.4998 1152" width="65pt">
<g id="surface1">
<path d="M 314.394531 957.035156 L 372.867188 996.015625 L 1152.5 996.015625 L 1152.5 957.035156 Z M 314.394531 957.035156 " style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;" />
<path d="M 723.710938 1112.96875 L 957.597656 1112.96875 L 957.597656 1151.953125 L 723.710938 1151.953125 Z M 723.710938 1112.96875 " style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;" />
<path d="M 645.738281 1035 L 1035.550781 1035 L 1035.550781 1073.988281 L 645.738281 1073.988281 Z M 645.738281 1035 " style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;" />
<path d="M 963.988281 600.28125 C 1032.492188 668.789062 1032.492188 779.859375 963.988281 848.367188 C 895.480469 916.859375 784.414062 916.859375 715.90625 848.367188 C 647.40625 779.859375 647.40625 668.789062 715.90625 600.28125 C 784.414062 531.78125 895.480469 531.78125 963.988281 600.28125 Z M 963.988281 600.28125 " style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;" />
<path d="M 189.921875 931.988281 C 304.882812 741.078125 373.835938 526.019531 391.320312 303.84375 L 601.683594 514.890625 C 634.886719 449.183594 622.332031 369.59375 570.5 317.304688 L 551.964844 298.617188 C 539.621094 286.207031 525.394531 275.808594 509.832031 267.828125 L 705.511719 268.703125 C 682.539062 198.746094 617.367188 151.339844 543.734375 151.035156 L 517.398438 150.917969 C 498.59375 150.867188 479.914062 153.933594 462.101562 160.007812 L 602.445312 20.15625 C 536.738281 -13.042969 457.167969 -0.488281 404.878906 51.328125 L 386.191406 69.875 C 373.777344 82.203125 363.382812 96.4375 355.40625 112.007812 C 347.539062 96.375 337.273438 82.050781 324.976562 69.597656 L 306.433594 50.90625 C 254.636719 -1.382812 175.183594 -14.65625 109.1875 17.949219 L 248.21875 159.03125 C 230.449219 152.8125 211.789062 149.578125 192.984375 149.453125 L 166.671875 149.34375 C 93.058594 149.007812 27.484375 195.808594 3.878906 265.539062 L 199.574219 266.417969 C 183.921875 274.269531 169.613281 284.539062 157.160156 296.839844 L 138.460938 315.386719 C 86.175781 367.191406 72.90625 446.648438 105.523438 512.648438 L 312.988281 308.242188 C 298.691406 521.808594 221.265625 726.308594 90.535156 895.777344 C 61.183594 887.429688 31.332031 880.988281 1.152344 876.492188 L 0 1129.867188 L 448.285156 1131.804688 L 447.429688 1130.738281 C 378.207031 1045.386719 290.027344 977.339844 189.921875 931.988281 Z M 136.542969 1111.019531 L 97.558594 1110.84375 L 97.730469 1071.859375 L 136.707031 1072.035156 Z M 253.632812 1072.558594 L 214.652344 1072.382812 L 214.84375 1033.402344 L 253.828125 1033.574219 Z M 253.632812 1072.558594 " style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;" />
</g>
</svg>
<span id="logo-strap">Joined at<br>the trip</span></a></div>

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
                            <a class="nav-link" href="#aboutUs">About Us</a>
                        </li>

                       
                        <?php 
                        if (!empty($_SESSION) ){
                        if ( $_SESSION["role"]=="Admin" ){
                         echo' <li class="nav-item">
                            <a class="nav-link"  href="?controller=user&action=readAll" >View all Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="?controller=post&action=readAll" >View all articles</a>
                        </li>;
                          <li class="nav-item">
                            <a class="nav-link"  href="?controller=post&action=create" >Create new article</a>
                        </li>';
                         
                        
                            
                        } }?>
                        
                         <?php 
                        if (!empty($_SESSION) ){
                        if ( $_SESSION["role"]=="master"  ){
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
                            <a class="nav-link"  href="?controller=user&action=allBloggers" >View all blogger</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link"  href="?controller=user&action=registerAdmin" >Add new blogger</a>
                        </li>';
                        
                            
                        } }?>
                       
                        <?php if (empty($_SESSION) || ($_SESSION["role"]=="User") )
                            {echo'<li class="nav-item">
                            <a class="nav-link"  href="#destination" >Destinations</a>
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

                         
                         <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#map">Map</a>
                        </li>'
                          

                            ;}
                            ?>
                      
                        
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
                        
                          echo'<a href="index.php"><button class="button"><i class="material-icons">
                        search
                         </i> <br>search </button> </a>';
 
                       

                        } ?>
 
                    

                </div>
            </nav>
      