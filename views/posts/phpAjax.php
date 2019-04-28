<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
   
 
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 

<?php

      
      
try {

       $conn= new PDO("mysql:host=$servername;dbname=blog", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("select title from post;"); 
    $stmt->execute();

   
    $data=$stmt->fetchAll();

   
foreach ($data as $row) {

    $book=$row['title'];
  
       
 

}   
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<?php


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($row as $title) {
    if (stristr($q, substr($title, 0, $len))) {
      if ($hint === "") {
        $hint = $title;
      } else {
        $hint .= ", $title";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>