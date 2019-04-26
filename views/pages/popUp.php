<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0,0,0,0.6); /* Black background with 0.5 opacity */
/*  background-color: #555;*/
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
/*  border: 3px solid #f1f1f1;*/
  z-index: 9;
  
}

/* Add styles to the form container "sign in" box*/
.form-container {
  max-width: 300px;
  padding: 10px;
/*  background-color: white;*/
        background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0,0,0,0.6); /* Black background with 0.5 opacity */
/*  width: 600px;*/
/*    height: 500px;*/
    border-radius: 20px;
/*    padding: 25px;*/
  display: block;
/*  margin-left: auto;
  margin-right: auto;*/
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  
/*     text-transform: uppercase;*/
   font-weight: 300;
   font-size: .9rem;
   color: white;
   letter-spacing: .1rem;
   background: rgba(0,0,0,0.6) !important;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
h6{
   text-transform: uppercase;
   font-weight: 700;
   font-size: .9rem;
   letter-spacing: .1rem;
   background: rgba(0,0,0,0.6) !important;
}
</style>
</head>
<body>

<!--<h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the contact form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>-->
<!--<a href="?controller=user&action=loginPopUp">-->
    <button class="open-button" onclick="openForm()"> Open Form</button> 
    <div class="form-popup" id="myForm">
  <form method="post" class="form-container">
    <h6>Login</h6>
                <br>
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
           
            <br>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

<a href="http://localhost:8080/travelBlogNew/index.php?controller=user&action=login">
    <button type="submit" class="btn">Login</button> </a>
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
