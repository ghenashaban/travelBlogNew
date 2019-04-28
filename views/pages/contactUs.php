<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<style>
          .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin_left: 10px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
    
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}  

/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  margin-left: 160px;
  /*margin-top: -2%;*/
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
.h2, s{
    margin-top: -15%
}

.h3 {
    text-align: center;
    vetical-align: middle;
}
</style>
 </head>
    <body>
        <h2> We are here to help! So if you got a question about ...</h3>
        
        
   <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/Melanie.jpeg" alt="Mel" style="width:300px; height:215px">
            </div> 
       <div class="flip-card-back">
           <h3></h3><br>
           <h3 class="title">OUR TOP DESTINATIONS</h3>
       </div> 
            </div>
        </div> 
       <h2><input type="submit" class='button' style="font-weight:800;" value="Contact Mel" onclick="window.location.href='mailto:melanie_leather@hotmail.com'"></h2>
  </div>

            
    <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/isside1.jpg" alt="Issi" style="width:300px; height:215px">
            </div>
       <div class="flip-card-back">
           <h3></h3><br>
           <h3 class="title">ECO-TRAVEL</h3>
       </div> 
            </div>
        </div>
        <h2><input type="submit" class='button' style="font-weight:800;" value="Contact Issi" onclick="window.location.href='mailto:isabel.draper.edwards@gmail.com'"></h2> 
  </div>

    <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/Ghena1.jpg" alt="Ghena" style="width:300px; height:215px">
            </div>
       <div class="flip-card-back">
         <h3></h3><br>
           <h3 class="title">TRAVELLING WITH KIDS</h3>
       </div>
            </div>
        </div>
        <h2><input type="submit" class='button' style="font-weight:800;" value="Contact Ghena" onclick="window.location.href='mailto:ghena@hotmail.co.uk'"></h2> 
  </div>
       
   <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/samira.jpg" alt="Samira" style="width:300px; height:215px">
            </div> 
       <div class="flip-card-back">
       <h3></h3><br>
           <h3 class="title">INSPIRATIONAL TRIP IDEAS</h3>
       </div> 
            </div>
        </div>
        <h2><input type="submit" class='button' style="font-weight:800;" value="Contact Samira" onclick="window.location.href='mailto:samiragitt@gmail.com'"></h2> 
  </div>
           
   <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/kk4.jpg" alt="Krisztina" style="width:300px; height:215px">
            </div>
       <div class="flip-card-back">
        <h3></h3><br>
           <h3 class="title">PRACTICAL TRAVEL TIPS</h3>
       </div>
            </div>
        </div>
        <h2><input type="submit" class='button' value="Contact Krisztina" onclick="window.location.href='mailto:krisztinakovacs2019@gmail.com'"></h2> 
  </div>  
        
    <div class="column">
        <div class="flip-card">
            <div class="flip-card-inner">
            <div class="flip-card-front">
        <img src="views/images/victoria1.jpg" alt="Victoria" style="width:300px; height:215px">
            </div>
       <div class="flip-card-back">
       <h3></h3><br>
           <h3 class="title">FOR EVERYTHING ELSE..</h3>
       </div> 
            </div>
        </div>
        <h2><input type="submit" class='button' style="font-weight:800;" value="Contact Victoria" onclick="window.location.href='mailto:qainstructorsky@gmail.com'"></h2> 
  </div>  <!-- close from L141-->  
   
  </div>  
            
        <?php
        // put your code here
        ?>
    </body>
</html>

