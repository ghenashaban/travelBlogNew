 <style>
            .border{
                border-radius: 8px;
                border-color:black;
                width: 250px;
                height:40px;
                padding: 20px;
            }
            #bannerLog{

                background: rgb(0, 0, 0); /* Fallback color */
                background: rgba(0,0,0,0.6); /* Black background with 0.5 opacity */
                width: 600px;
                height: 500px;
                border-radius: 20px;
                padding: 25px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .btn{
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
                color: black;
                
            }
        </style>

  <div id="bannerLog">
      
      <h2>Reset Password</h2>
<form method="POST" >
    <br>   <p>
     <label>Old password</label>
     <input class="w3-input" type="password" name="oldPassword"  >
      
    </p>
    </p>
     <label>New password</label>
     <input class="w3-input" type="password" name="password"  >
      
    </p>
    <p>
    <input class="w3-btn w3-gray" type="submit" value="reset">
    </p>
    </form>
  </div>
<?php require_once 'views/pages/divs.php'; ?>