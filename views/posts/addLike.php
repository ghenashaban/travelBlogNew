
 <?php if (!empty($_SESSION) ){
       echo' <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
        <input class="w3-input" type="hidden" name="post_id" value=" '.$posts->id.'; ">
         <input class="w3-input" type="hidden" name="user_id" value="'. $_SESSION["id"].' ?>">
                  <input class="w3-input" type="hidden" name="like_count" value="1">
        <input class="w3-btn w3-pink" type="submit" value="Like">
       </form>';

 }else{
     "<a href='?controller=user&action=login'><button>comment</button> </a>";
 }

