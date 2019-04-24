<?php
        session_start();
        
        const InputKey = 'myfile';
        const AllowedTypes = ['image/jpeg','image/jpg','image/bmp','image/png'];
        
        
        if (empty($_FILES[InputKey]['name'])){
        header("Location: error.php");
        $_SESSION['errorMessage']="You forgot to add your file!";
        die ();
        }
        
        if (!in_array($_FILES[InputKey]['type'],AllowedTypes)){//For some reason I had to put this before the file size check, couldn't work out why - even if did a under the limit, but wrong type - i was getting the error message for a wrong size
        header("Location: error.php"); 
        $_SESSION['errorMessage']="We only accept jpeg, jpg, bmp and png files I'm afraid";
        die();
        }
    
        if ($_FILES[InputKey]['error'] == 2) {// Check file size - originally had[UploadKey]['size'] but kept going to line 40 - perhaps becasue PHP checks initially if file size bigger than what specified in $_FILES and doesn;t populate SG beyond name and error if too big.
        header("Location: error.php"); 
        $_SESSION['errorMessage']="Your file is too big for us to handle, awkward! Please choose a file under 100KB.";
        die();
        }

        $tempFileLoc = $_FILES[InputKey]['tmp_name'];
        $destFileLoc = 'Uploads/'.$_FILES[InputKey]['name'];

        if (file_exists($destFileLoc)) {// Check if file already exists
        header("Location: error.php"); 
        $_SESSION['errorMessage']="We've already got this file, thanks though";
        die();
        }

        if ($_FILES[InputKey]['error']>0){
        header("Location: error.php"); 
        $_SESSION['errorMessage']="Unfortunately there's been an error with the uploading process";
        die();
        }

        //Moving the file and ensuring deleted from temporary location
        if(!move_uploaded_file($tempFileLoc, $destFileLoc)){//trys to move, if successful returns true therefore if failed, ! would make true and get error statement
        header("Location: error.php"); 
        $_SESSION['errorMessage']="There's been an error with the uploading process";
        die();
        }
        else {
        unset($_SESSION['errorMessage']);
//        header("Location: confirmation.php");
        //var_dump($_FILES);
        //var_dump($_SESSION); checking to see that errorMessage successfully cleared - yep
        }

        if (file_exists($tempFileLoc)){
        unlink($tempFileLoc);
        }   



