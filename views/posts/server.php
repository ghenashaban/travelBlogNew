<?php		
    
require_once('./../../connection.php');
require_once('./../../models/post.php');
if(isset($_REQUEST ["query"]))
{
    $query = $_REQUEST ["query"];
    $ret = Post::searchAhead($query);
    echo $ret;
}
?>