<html>
    <head>
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
    </head>

    <div id="bannerLog">
       
            <div class="form-container">
                <form method="post" class="w3-container">
                    <h2>Log in</h2>
                    <br>
                    <?php
                    if (isset($error)) {
                        ?>
                        <div class="alert alert-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                        </div>
                        <?php
                    }
                    ?>

                    <br>
                    <label>Username</label>
                    <br>
                    <input type="text" class="w3-container border" name="username" placeholder="Username" required />

                    <br>
                    <label>Password </label>
                    <br>
                    <input type="password" class="w3- border" name="password" placeholder="Your Password" required />

                    <br>
                    <br>


                    <div class="w3-container">
                        <center>  <button type="submit" name="submit" class="btn btn-default">
                                <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                            </button>
                        </center>
                    </div>

                </form>
            </div>
       
        <h6>Not registered? Please sign up here! <a href="?controller=user&action=register">
                <button class="button"><i class="material-icons">
                        person_add
                    </i> <br>sign up </button> </a></h6> 
   </div>



</html>  

<?php require_once 'views/pages/divs.php'; ?>