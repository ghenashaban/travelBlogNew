<style>
        #back{
        color: black;
        background-color: #55d6be;
        border-radius:12px;
    }
</style>
        <div id="banner">
            <div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous" id="back"> &laquo; Back</button> </div>    
                <div class="col-8"><h2>List of all registered users:</h2>   
                </div> </div>
      

        <?php foreach ($users as $user) { ?>
            <div class="row">
<div class="col-8">
            <?php echo "$user->first_name" ?>  
            <?php echo "$user->surname" ?>  
    </div>
    <div class="col-2">
            <a href='?controller=user&action=read&id=<?php echo $user->id; ?>' class='btn btn-primary'>More info..</a>
        </div>  
                 </div>
        <?php } ?> 
    
       
        </div>
<script>
function goBack() {
  window.history.back();
}

                    </script> 
<?php require_once 'views/pages/divs.php'; ?>