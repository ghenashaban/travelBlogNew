    <!--- start destination section --->
 <div id="destination" class="offset">

           <div class="col-12"> 
             
                <h1 class="text-center">Destinations
               </h1>
               <div class="heading-underline"></div>
<div class="container-fluid">
<div class="row">
    
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $RecentPostDes->title.".jpg"; ?>" alt='Lake in Croatia'>
    <div class="card-header"><h3><?php echo $RecentPostDes->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $RecentPostDes->id; ?>" class="stretched-link card-title">MOST RECENT ARTICLE IN DESTINATION!</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $postLikeDes->title.".jpg"; ?>" alt="Miami skyline">
    <div class="card-header"><h3><?php echo $postLikeDes->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $postLikeDes->id; ?>" class="stretched-link card-title">South Beach is usually the first thing people think of when it comes to Miami - but there's a lot more to the city than that</a>
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
    <img class="card-img-top" src="views/images/<?php echo $RecentPostEco->title.".jpg"; ?>" alt="Lake and flowers in Switzerland">
    <div class="card-header"><h3><?php echo $RecentPostEco->title?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $RecentPostEco->id?>" class="stretched-link card-title">We take a tour of the world’s most eco-friendly destinations</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $postLikeEco->title.".jpg"; ?>" alt="Plastic bottles">
    <div class="card-header"><h3><?php echo $postLikeEco->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $postLikeEco->id; ?>" class="stretched-link card-title">You can reduce how much single use plastic you consume while travelling through a bit of preparation</a>
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
    <img class="card-img-top" src="views/images/<?php echo $RecentPostFam->title.".jpg"; ?>" alt="Welsh shipping container">
    <div class="card-header"><h3><?php echo $RecentPostFam->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $RecentPostFam->id; ?>" class="stretched-link card-title">How we found holiday bliss in a Welsh shipping container</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $postLikeFam->title.".jpg"; ?>" alt="Dubai skyline">
    <div class="card-header"><h3><?php echo $postLikeFam->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $postLikeFam->id; ?>" class="stretched-link card-title">Why Dubai is the perfect family holiday destination</a>
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
    <img class="card-img-top" src="views/images/<?php echo $postLikeIns->title.".jpg"; ?>" alt="Sardinia canyon">
    <div class="card-header"><h3><?php echo $postLikeIns->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $postLikeIns->id; ?>" class="stretched-link card-title">Up for a challenge? Try hiking this rocky ravine</a>
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
    <img class="card-img-top" src="views/images/<?php echo $RecentPostIns->title.".jpg"; ?>" alt="Hammock on beach">
    <div class="card-header"><h3><?php echo $RecentPostIns->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $RecentPostIns->id; ?>" class="stretched-link card-title">We check out the best destinations for romance</a>
     </div>
    </div>                   
</div>             
  </div> 
          <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=4 ">Read more articles</a></div>                    
 </div>           
            </div>
        </div>
        <!--- start practical tips section --->
        <div id="practicalTips" class="offset">    

          
    <!--            <div class="narrow text-center">-->

                    <div class="col-12">
                        <h3 class="heading text-center">Practical tips</h3>
                        <div class="heading-underline"></div>
                    </div>  
                    
        <div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $postLikeTip->title.".jpg"; ?>" alt="Family at airport">
    <div class="card-header"><h3><?php echo $postLikeTip->title; ?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $postLikeTip->id; ?>" class="stretched-link card-title">Don't leave home without these essential items</a>
     </div>
    </div>
</div>
 
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/HOW TO SURVIVE A LONG CAR JOURNEY WITH Children.jpg" alt="Childen in car">
    <div class="card-header"><h3>How to survive a long car journey with kids</h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=106" class="stretched-link card-title">Don't miss these essential tips for those long car journeys this summer</a>
     </div>
    </div>
</div>
                
<div class="col-md-4 mt-4">
  <div class="card">
    <img class="card-img-top" src="views/images/<?php echo $RecentPostTip->title.".jpg"; ?>" alt="Two women taking selfie">
    <div class="card-header"><h3><?php echo $RecentPostTip->title?></h3></div>
    <div class="card-body">
      <a href="?controller=post&action=read&id=<?php echo $RecentPostTip->id?>" class="stretched-link card-title">Avoid conflict by asking these five questions before you set off</a>
     </div>
    </div>
</div>
 </div> 
                      <div class="text-center"><a class="btn btn-secondary btn-md" href="?controller=post&action=readByCat&categoryID=5 ">Read more articles</a></div> 
 </div>                    
       
                 
            </div>
           <div id="map" class="offset">    

          
    <!--            <div class="narrow text-center">-->

                    <div class="col-12">
                        <h3 class="heading text-center">Map</h3>
                        <div class="heading-underline"></div>
                    </div>  
                    
        <div class="container-fluid">
<div class="row">

 
   <?php require_once 'views/pages/maps.php';?>
                

 </div> 
                      
 </div>                    
       
                 
            </div>
        
<div id="gallery">
      <div class="jumbotron">
          <div class="col-12">
                        <h3 class="heading text-center">Gallery</h3>
                        <div class="heading-underline"></div>
                    </div> 
<div class="row">
    <div class="col-md-4 mx-auto">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner h-75">
    <div class="carousel-item active">
      <img src="views/images/badbearnew.jpg" alt="Ghena and Victoria with polar bear">
    </div>
    <div class="carousel-item">
      <img src="views/images/bearnew.jpg" alt="Issi and Ghena with polar bear">
    </div>
    <div class="carousel-item">
      <img src="views/images/issinew.jpg" alt="Issi with film star">
    </div>
       <div class="carousel-item">
      <img src="views/images/route66new.jpg" alt="Team in front of Route 66 sign">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  </div>  
</div>  
     </div> 
    </div> 
        
 <div id="aboutUs" class="offset">

           <div class="col-12"> 
             
                <div class="col-12">
                        <h3 class="heading text-center">About us</h3>
                        <div class="heading-underline"></div>
                    </div> 
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 mx-auto"> <img class="img-fluid d-block" src="views/images/beach1.jpg" alt="The Joined at the Trip team"></div></div>
 <div class="row">
     <div class="col-md-8 mx-auto">
         <div id="about-us" class="text-center btn btn-secondary btn-md">We are a group of five women who love to travel. Our trips around the world, to far-flung destinations like Fiji, to closer-to-home destinations like Spain, inspired us to set up this website. Our aim is to provide unbiased, practical travel advice to help you plan the best holiday possible!</div>
     </div></div>
    </div> 
     </div>
     </div>
        
    <!--- start contact us section --->
        <div id="contact-us" class="offset">

            <div class="jumbotron">

                <div class="col-12 text-center">
                    <h3 class="heading">Contact us</h3>
                    <div class="heading-underline"></div>
                </div>  

 <div class="container-fluid">
<div class="row">
<div class="col-md-4 mt-4">
  <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/ghena2.jpg" alt="Ghena Shaban" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Ghena Shaban</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:g.shaban@jatr.com">g.shaban@jatr.com</a></p>
    </div>
  </div>
</div>
   </div>
    
     <div class="col-md-4 mt-4">
    <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/issi2.jpg" alt="Issi Draper-Edwards" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Issi Draper-Edwards</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:i.draper-edwards@jatr.com">i.draper-edwards@jatr.com</a></p>
    </div>
  </div>
</div>
</div>
    
    <div class="col-md-4 mt-4">
    <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/mel2.jpg" alt="Melanie Leather" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Melanie Leather</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:m.leather@jatr.com">m.leather@jatr.com</a></p>
    </div>
  </div>
</div>
     </div>
         </div>
     
     <div class="row">
<div class="col-md-4 mt-4">
  <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/kristina2.jpg" alt="Krisztina Kovacs" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Krisztina Kovacs</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:k.kovacs@jatr.com">k.kovacs@jatr.com</a></p>
    </div>
  </div>
</div>
   </div>
    
     <div class="col-md-4 mt-4">
    <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/samira2.jpg" alt="Samira Ali" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Samira Ali</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:s.ali@jatr.com">s.ali@jatr.com</a></p>
    </div>
  </div>
</div>
</div>
    
    <div class="col-md-4 mt-4">
    <div class="flip-card mx-auto">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="views/images/victoriaLI.jpg" alt="Victoria Holmes" style="width:230px;height:230px;">
    </div>
    <div class="flip-card-back">
      <h3>Victoria Holmes</h3> 
      <p>Travel adviser</p> 
      <p>Contact: <a href="mailto:v.holmes@jatr.com">v.holmes@jatr.com</a></p>
    </div>
  </div>
</div>
     </div>
         </div>
    </div>                   
</div>             
  </div> 
                        
  
    

    
    
    
    
    
         
     
     
        <!--footer-->
             <div id="contact" class="offset">
            <footer>
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">


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
                        
                        
                        <p><strong>Tel: 020 777 4567<br>Email: <a href="mailto:v.holmes@jatr.com">joined-at-the-trip@gmail.com</a></strong></p>
        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

                    <hr class="socket">
                    &copy; Joined at the trip

                </div>
            </footer>
        </div>

         <!-- End of footer -->
