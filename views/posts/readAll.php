<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
       
        <div id="banner">
            <div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous"> &laquo; Back</button> </div>    
                <div class="col-9"><h2>Joined at the trip Blogs</h2>   
                </div> </div>

        


 <div class="row">
   <?php foreach ($posts as $post) { ?>
     <div class="col-6"> <p>  <td>   <?php echo $post->title; ?> </td> </div> 
    <div class="col-2">
   
   <a href='?controller=post&action=read&id=<?php echo $post->id; ?>' class='btn btn-primary'>Read More</a>
 </div>
     <div class="col-2">    
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'class='btn btn-primary'>Update</a>
     </div>
     <div class="col-2">
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>' class='btn btn-primary' onclick="ConfirmDelete()">Delete</a>
    </p> </div>
                        <?php } ?>
                            
 </div>
        </div>
  
     <script>
                        function ConfirmDelete() {
                            var txt;
                            var r = confirm("Are you sure you want to delete this post?");
                            if (r == true) {
                                txt = "You pressed OK! ";
                                window.location.href = ("?controller=post&action=delete&id=<?php echo $post->id; ?>");
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                        }
                        </script>
                        <script>
function goBack() {
  window.history.back();
}

                    </script>  
                    </div>
    </body>
</html>
<?php require_once 'views/pages/divs.php'; ?>