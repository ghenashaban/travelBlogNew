
        <div id="banner">
        <h3> List of all registered users:</h3>

        <?php foreach ($users as $user) { ?>

            <?php echo "$user->first_name" ?>  
            <?php echo "$user->surname" ?>  
            <a href='?controller=user&action=read&id=<?php echo $user->id; ?>' class='btn btn-primary'>More info..</a>
            <br> <br>
        <?php } ?> 
   
        </div>
<?php require_once 'views/pages/divs.php'; ?>