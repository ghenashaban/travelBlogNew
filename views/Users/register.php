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
}

         </style> 
    </head>
    <div id="bannerREG">
<h3>Fill in the following form to Register:</h3>
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
        <input class="w3-input border" id = "surname" type="text" name="surname" required> 
    
     </div>
 </div>
     <div class="row">
<div class="col-sm-6">
    
            <label>username</label>
          <br>
          <input class="w3-input border" id= "username" onkeyup="clearUserMessage()" onblur="checkUserNameAgainstExisting()" type="text" class="form-control" name="username" required>
        <span id='usernamemessage'></span> <br>
    
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
       <input class="w3-input border" type="text" name="country" placeholder="UK AND USA for now" required>
   
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
                     <input class="w3-input" type="hidden" name="role" value="User" required>
        
    

   
    
      
  
</form>
    </div>
  <script>
//         
            function check_pass() {
                if (document.getElementById('password1').value ==
                        document.getElementById('password2').value) {
                    document.getElementById('submit').disabled = false;

                    $('#message').html('Matching').css('color', 'green');
                    var pwd = document.getElementById('password1').value;
                    //this is an extra validation to ensure password is at least
                    //eight characters long, could add more validation
                    if(pwd.length<8)
                        $('#message').html('Password too short').css('color', 'red');
                } else {
                    document.getElementById('submit').disabled = true;
                     $('#message').html('Not Matching').css('color', 'red');

                }
            }
            function clearUserMessage(){
                $('#usernamemessage').html('');
            }
            //This javascript function makes an ajax call to php server
            //to check if a chosen username has already been used
            //currently if there is an existing user
            //it just warns with a message in red, should probably combine
            //with password validation and prevent submit button from being
            //enabled. Also, email should be unique too (username could actually be email)
            function checkUserNameAgainstExisting(){
                //alert('checkUserNameAgainstExisting');
                //document.getElementById('username').value = "x";
                if (document.getElementById('username') && document.getElementById('username').value) 
                {
                    //alert('checkUserNameAgainstExisting has value');
                    var chosenName = document.getElementById('username').value;
                    //document.getElementById('surname').value = 'worked2';
                    var xhttp;
                    xhttp=new XMLHttpRequest();
                    xhttp.onreadystatechange=function(){
                    //alert(this.status);
                    if (this.readyState ==4 && this.status ==200) {
                        //alert(this.status);
                        //document.getElementById('surname').value = this.responseText;
                        if(this.responseText==="1")
                            $('#usernamemessage').html('User name exists').css('color', 'red');
                        else
                            $('#usernamemessage').html('').css('color', 'red');
                    }
                    };
                    xhttp.open("GET","./views/Users/UserValidation.php?chosenUserName="+chosenName);      
                    xhttp.send();
                    //alert('<-send()');
                }
            }   
        </script>
</html>




           