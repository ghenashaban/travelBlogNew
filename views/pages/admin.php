<!DOCTYPE html>
<div id="banner">
        <h3>List of all registered Users</h3>
        <?php
        foreach ($users as $user) { ?>
        <?php echo "$user->first_name" . "$user->last_name"; ?>           
        <a href='?controller=user&action=readAll' class='btn btn-primary'>View all registered users.</a>     
        <?php } ?>
        
        
 <div id="destination" class="offset">
      
    
</div>
        
</div>
