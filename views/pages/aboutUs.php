<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library User Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <link href="myRentals.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>        
        * {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
    </head>


    <body>


        <!-- MAIN (Center website) -->
        <div class="main">

            <h1>THE JATT TEAM </h1>
            <hr>

            <div id="BtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> SHOW ALL</button>
                <button class="btn" onclick="filterSelection('Mel')"> MEL</button>
                <button class="btn" onclick="filterSelection('Issi')"> ISSI</button>
                <button class="btn" onclick="filterSelection('Ghena')"> GHENA</button>
                <button class="btn" onclick="filterSelection('Samira')"> SAMIRA</button>
                <button class="btn" onclick="filterSelection('Krisztina')"> KRISZTINA</button>
                <button class="btn" onclick="filterSelection('Victoria')"> VICTORIA</button>
                
                
            </div>
           
            <!-- Team Grid -->
            <div class="row">
                <div class="column Mel">
                    <div class="content">
                        <img src="views/images/Melanie.jpeg" alt="mel" style="width:300px; height:300px">
                        <h3>MEL</h3> 
                    </div>                                                                                                  <!-- Also  in these P tag we could link the date to the database to make it dynamic but at the moment i have no idea how to...--> 
                </div>

                <div class="column Issi">
                    <div class="content">
                        <img src="views/images/isside1.jpg" alt="issi" style="width:300px; height:300px">
                        <h3>ISSI</h3>
                    </div>
                </div>
                
                <div class="column Ghena">
                    <div class="content">
                        <img src="views/images/Ghena1.jpg" alt="ghena" style="width:300px; height:300px">
                        <h3>Ghena</h3>
                    </div>
                </div>
                
                <div class="column Samira">
                    <div class="content">
                        <img src="views/images/samira.jpg" alt="samira" style="width:300px; height:300px">
                        <h3>Samira</h3>
                    </div>
                </div>
                
                <div class="column Krisztina">
                    <div class="content">
                        <img src="views/images/kk4.jpg" alt="krisztina" style="width:300px; height:300px">
                        <h3>Krisztina</h3>
                    </div>
                </div>
                
                <div class="column Victoria">
                    <div class="content">
                        <img src="views/images/victoriaLI.jpg" alt="victoria" style="width:300px; height:300px">
                        <h3>Victoria</h3>
                    </div>
                </div>
                    
                  
                    <!-- <a href="https://www.google.com/" target="_blank"></a>-->
                </div>

                <!-- END GRID -->

            </div>
            <b><h2 style="color:blue;"> Come On ...   Let's start the journey</h2></b>
    <p>note to myself make this last call onclick to take us back to home page</p>

            <!-- END MAIN -->
        </div>

        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("column");// select all element by column (Book/Film/Magazine
                if (c == "all")
                    c = "";
                //add the class the we filter and want to show and remove the ones we do not want to see
                for (i = 0; i < x.length; i++) {                // The length property returns the number of elements
                    RemoveClass(x[i], "show");                  // use array to catch all the units is the class
                    if (x[i].className.indexOf(c) > -1)
                        AddClass(x[i], "show");
                }
            }

            //showing class that was filtered i used \how to add class  from 
            //w3 schools https://www.w3schools.com/howto/howto_js_add_class.asp
            function AddClass(element, name) {
                var i, arr1, name2;
                arr1 = element.className.split(" ");
                name2 = name.split(" ");
                for (i = 0; i < name2.length; i++) {
                    if (arr1.indexOf(name2[i]) == -1) {         //The indexOf() method returns the index of (the position of) the first occurrence of a specified text in a string -if not found return -1
                        element.className += " " + name2[i];
                    }
                }
            }
            //removing class similar logic to adding class 
            function RemoveClass(element, name) {
                var i, arr1, name2;
                arr1 = element.className.split(" ");
                name2 = name.split(" ");
                for (i = 0; i < name2.length; i++) {
                    while (arr1.indexOf(name2[i]) > -1) {
                        arr1.splice(arr1.indexOf(name2[i]), 1); // to remove element from array I used w3 schools https://www.w3schools.com/jsref/jsref_splice.asp
                    }
                }
                element.className = arr1.join(" ");             // to join elements of an array see https://www.w3schools.com/jsref/jsref_join.asp
            }


            // This adds an active class to the current button 
            var btnContainer = document.getElementById("BtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>

    </body>
</html>