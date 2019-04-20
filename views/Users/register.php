 <form method="post">
            <h2>Register</h2><hr />
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
            <div class="form-group">
             <input type="text" class="form-control" name="first_name" placeholder="first_name" required />
            </div>
            <div class="form-group">
             <input type="text" class="form-control" name="surname" placeholder="surname" required />
            </div>
            <div class="form-group">
             <input type="text" class="form-control" name="username" placeholder="username" required />
            </div>
            <div class="form-group">
             <input type="text" class="form-control" name="email" placeholder="email" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Your Password" required />
            </div>
              <div class="form-group">
             <input type="text" class="form-control" name="role" placeholder="role" required />
            </div>
            <div class="clearfix"></div><hr />
        
            <div class="form-group">
             <button type="submit" name="submit" class="btn btn-default">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br/>
        
        </form>