<!DOCTYPE html>
<?php 
if (!empty($_SESSION) ){
$userID=$_SESSION['id'];
}
?> 

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <!-- logo-->
            <div><a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" height="65pt" version="1.1" viewBox="0 -1 612.092 612" width="65pt">
<g id="surface1">
<path d="M 0 0.046875 L 610.726562 0.046875 L 610.726562 610.773438 L 0 610.773438 Z M 0 0.046875 " style=" stroke:none;fill-rule:nonzero;fill:#1ebba3;fill-opacity:1;" />
<path d="M 610.382812 519.164062 L 0 519.164062 L 0 610.773438 L 612 610.773438 Z M 610.382812 519.164062 " style=" stroke:none;fill-rule:nonzero;fill:rgb(70.980392%,22.745098%,14.117647%);fill-opacity:1;" />
<path d="M 539.476562 386.839844 C 539.476562 437.433594 498.460938 478.449219 447.867188 478.449219 C 397.273438 478.449219 356.257812 437.433594 356.257812 386.839844 C 356.257812 336.246094 397.273438 295.230469 447.867188 295.230469 C 498.460938 295.230469 539.476562 336.246094 539.476562 386.839844 Z M 539.476562 386.839844 " style=" stroke:none;fill-rule:nonzero;fill:rgb(98.039216%,70.196078%,28.627451%);fill-opacity:1;" />
<path d="M 262.296875 610.773438 L 0 610.773438 L 0 458.09375 C 103.425781 473.625 197.042969 527.988281 261.789062 610.132812 Z M 262.296875 610.773438 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 122.144531 549.703125 L 142.503906 549.703125 L 142.503906 570.058594 L 122.144531 570.058594 Z M 122.144531 549.703125 " style=" stroke:none;fill-rule:nonzero;fill:rgb(45.882353%,20.784314%,20.784314%);fill-opacity:1;" />
<path d="M 61.074219 570.058594 L 81.429688 570.058594 L 81.429688 590.417969 L 61.074219 590.417969 Z M 61.074219 570.058594 " style=" stroke:none;fill-rule:nonzero;fill:rgb(45.882353%,20.784314%,20.784314%);fill-opacity:1;" />
<path d="M 173.039062 133.390625 C 173.394531 265.996094 127.113281 394.515625 42.285156 496.4375 C 56.828125 501.769531 71.253906 507.714844 95.550781 518.421875 C 160.5625 417.429688 213.757812 275.890625 213.757812 133.390625 Z M 173.039062 133.390625 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 389.707031 590.417969 L 506.039062 590.417969 L 506.039062 610.773438 L 389.707031 610.773438 Z M 389.707031 590.417969 " style=" stroke:none;fill-rule:nonzero;fill:rgb(89.019608%,40.784314%,9.019608%);fill-opacity:1;" />
<path d="M 346.078125 549.703125 L 549.65625 549.703125 L 549.65625 570.058594 L 346.078125 570.058594 Z M 346.078125 549.703125 " style=" stroke:none;fill-rule:nonzero;fill:rgb(89.019608%,40.784314%,9.019608%);fill-opacity:1;" />
<path d="M 211.453125 184.109375 C 212.890625 167.253906 213.753906 150.316406 213.753906 133.359375 L 173.039062 133.359375 C 173.039062 150.398438 172.296875 167.316406 170.8125 184.097656 L 211.457031 184.097656 L 211.457031 184.109375 Z M 211.453125 184.109375 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 193.398438 149.214844 L 322.210938 19.660156 C 287.824219 2.46875 246.296875 9.207031 219.109375 36.382812 L 209.378906 46.113281 C 182.394531 73.445312 175.960938 114.996094 193.398438 149.214844 Z M 193.398438 149.214844 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 193.398438 149.214844 L 64.585938 19.660156 C 98.96875 2.46875 140.496094 9.207031 167.6875 36.382812 L 177.417969 46.113281 C 204.398438 73.445312 210.832031 114.996094 193.398438 149.214844 Z M 193.398438 149.214844 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 193.398438 149.214844 L 10.179688 149.214844 C 22.332031 112.746094 56.472656 88.144531 94.917969 88.144531 L 108.65625 88.144531 C 147.105469 88.132812 181.242188 112.734375 193.398438 149.214844 Z M 193.398438 149.214844 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 376.617188 149.214844 L 193.398438 149.214844 C 205.550781 112.746094 239.691406 88.144531 278.136719 88.144531 L 291.875 88.144531 C 330.324219 88.132812 364.460938 112.734375 376.617188 149.214844 Z M 376.617188 149.214844 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 322.953125 278.019531 L 193.398438 149.214844 C 227.617188 131.769531 269.167969 138.203125 296.5 165.195312 L 306.21875 174.917969 C 333.40625 202.09375 340.144531 243.625 322.953125 278.019531 Z M 322.953125 278.019531 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
<path d="M 63.839844 278.019531 L 193.398438 149.214844 C 159.175781 131.769531 117.625 138.203125 90.296875 165.195312 L 80.574219 174.917969 C 53.386719 202.09375 46.648438 243.625 63.839844 278.019531 Z M 63.839844 278.019531 " style=" stroke:none;fill-rule:nonzero;fill:rgb(37.254902%,14.509804%,13.72549%);fill-opacity:1;" />
</g>
</svg>
<span id="logo-strap">Joined at<br>the trip</span></a>
</div>
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
                            <a class="nav-link" href="?controller=pages&action=aboutUs">About Us</a>
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
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#practicalTips">Practical Tips</a>
                        </li> 
                          '
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
                        
                          echo'<a href="?controller=post&action=searchBar"><button class="button"><i class="material-icons">
                        search
                         </i> <br>search </button> </a>';
 
                        }?>

               
 
                    

                </div>
            </nav>
      