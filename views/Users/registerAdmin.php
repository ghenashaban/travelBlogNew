<html>
    <head>
<!--         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
         <style>
   .border{
  border-radius: 8px;
border-color:black;
    width: 250px;
    height:40px;
}
#bannerREG{
   
    background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0,0,0,0.6); /* Black background with 0.5 opacity */
  width: 900px;
    height: 600px;
    border-radius: 20px;
    padding: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  
        #back{
        color: black;
        background-color: #55d6be;
        border-radius:12px;
    }

}

         </style> 
    </head>
    <div id="bannerREG">
<div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous" id="back"> &laquo; Back</button> </div>    
                <div class="col-8"><h2>Add a new blogger:</h2>   
                </div> </div>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
 <div class="row">
<div class="col-sm-6">
   
        <label>First name</label>
        <br>
        <input class="w3-input border" type="text" name="first_name"  required="true" autofocus >
        
</div>
     <div class="col-sm-6">
      
            <label>surname</label>
            <br>
        <input class="w3-input border" type="text" name="surname" required> 
    
     </div>
 </div>
     <div class="row">
<div class="col-sm-6">
    
            <label>username</label>
          <br>
        <input class="w3-input border" type="text"  name="username" required>
        
    
    </div>
     <div class="col-sm-6">
    
       <label>email</label>
       <br>
        <input class="w3-input border" type="text" name="email" required>
    
     </div>
     </div>
         <div class="row">
<div class="col-sm-6">
     
       <label>Country</label>
       <br>
       <input class="w3-input border" type="text" name="country"  required>
   
    </div>
     <div class="col-sm-6">
   
        <label>Upload profile picture</label>
        <br>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
        
        <input type="file"  name="myUploader"/>
    

    
     </div>
         </div>
    

  <div class="row">
<div class="col-sm-6">
   
        <label>password</label>
        <br>
                        <input   class="w3-input border"  id="password1" onKeyUp="check_pass()" type="password" class="form-control" name="password"required  placeholder="Enter Password" />
    
     </div>
     <div class="col-sm-6">
   
        <label>Confirm password</label> 
        <br>
        <input class="w3-input border"  id="password2" onKeyUp="check_pass()" type="password" name="confirm_password" class="form-control"required  placeholder="Confirm Password" />
    
     </div>
  </div>
    <span id='message'></span> <br>
                        <button  type="submit" value="Submit" id="submit" disabled class="btn btn-default" >-->
                            <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                        </button>
    
                    </div>
 
  
  
  
                    <br />
                     <input class="w3-input" type="hidden" name="role" value="Admin" required>
        
    

   
    
      
  
</form>
    </div>
  <script>
//         
            function check_pass() {
                if (document.getElementById('password1').value ==
                        document.getElementById('password2').value) {
                    document.getElementById('submit').disabled = false;

                    $('#message').html('Matching').css('color', 'green');
                } else {
                    document.getElementById('submit').disabled = true;
                     $('#message').html('Not Matching').css('color', 'red');

                }
            }

        </script>
        <script>
function goBack() {
  window.history.back();
}

                    </script> 
</html>


<?php require_once 'views/pages/divs.php'; ?>

           