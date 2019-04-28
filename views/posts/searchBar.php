<!DOCTYPE html>
<!--
tis is the one that links.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <div class="header">
            <form>
        <h1> Search our database</h1>
        <input type="text" class=searchTerm"  placeholder="Search..">  
        
        <select name="Field">
                <option value="FieldSearch">Chose a field</option>
                <option value="Title">Title</option>
                <option value="Author">Author</option>
                <option value="Date">Date</option>
                <option value="Country">Country</option>
                <option value="Tag">Tag</option>
            </select>
       
           <!--<input type="submit" name="field" value="Time to travel!">-->
               
   
        
     
        <a href='?controller=post&action=search' class='btn btn-primary'>Time to travel!.</a>  
        
            
         <?php>
        
      
    </body>
</html>
