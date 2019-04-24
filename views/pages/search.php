<!--ennek kell linkelni--turn lines 2-4 into drop down menu-->
<!--<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="search" onclick="search(searchTerm))">Search</button>
</form>
  <h3> ez  a jo? List all articles relating to your search</h3>
 

  
<div class ="post-container"> -->
    
        <?php
        
        
//         if(isset($_POST['search'])){
//             $searchTerm= mysqli_real_escape_string($conn, $_POST['searchTerm']); //make sure that users do not inject data and not mess with databse
//             $sql = "SELECT * FROM post WHERE title LIKE '%$searchTerm%' OR body LIKE '%$searchTerm%' OR published LIKE '%$searchTerm%'"; // copy and search as many things as we want it tobe searchable for 
//             $result = mysqli_query($conn, $sql);
//             $queryResult = mysqli_num_rows($result);
//             
//             echo "There are ".$queryResult. " results!";
//                 
//             if ($queryResult > 0){
//                    while($row= mysqli_fetch_assoc($result)){
//                        echo "<a href='read.php?title=" .$row['title']."&published=" .$row['published']."'<div class='article-box'>
//                              <h3>" .$row['title']."</h3>
//                              <p>" .$row['body']."</p> 
//                              <p>" .$row['published']."</p>
//                            </div></a>";
//                    }    
//             }else {
//                 echo "There are no results matching your search!";
//             }
//         }
     
        