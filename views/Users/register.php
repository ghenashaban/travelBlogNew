<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         
    </head>
<p>Fill in the following form to Register:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
 

    <p>
        <label>First_name</label>
        <input class="w3-input" type="text" name="first_name" required autofocus>
        
    </p>
        <p>
            <label>surname</label>
        <input class="w3-input" type="text" name="surname" required> 
    </p>
     <p>
            <label>username</label>
        <input class="w3-input" type="text" name="username" required>
        
    </p>
    <p>
       <label>email</label>
        <input class="w3-input" type="text" name="email" required>
        
    </p>
    
                    <div class="form-group">
                        <input id="password1" onKeyUp="check_pass()" type="password" class="form-control" name="password"required  placeholder="Enter Password" />
                    </div>
                    <div class="form-group">
                        <input  id="password2" onKeyUp="check_pass()" type="password" name="confirm_password" class="form-control"required  placeholder="Confirm Password" />
                    </div>
                    <div class="clearfix"></div><hr />
                    <div class="form-group">
                        <button  type="submit" value="Submit" id="submit" disabled class="btn btn-default" >-->
                            <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                        </button>
                    </div>
                    <br />
<span id='message'></span>
      
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Register">
  </p>
</form>
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
</html>




           