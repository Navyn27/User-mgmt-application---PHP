<?php

$extensions = ["jpg","gif","png","jiff","jpeg","PNG","GIF","JPG","JIFF","JPEG"];
$fileUploadErrors = array(
 0 => 'There is no error, the file uploaded with success',
 1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
 2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
 3 => 'The file was only partially uploaded',
 4 => 'No file was uploaded',
 6 => 'Missing a temporary folder',
 7 => 'Failed to write file to disk',
 8 => 'A PHP extension stopped the file upload'
);

if(isset($_POST['submit'])){

    $firstname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass = $password;
    $tele = $_POST['tele'];
    $role = $_POST['role'];

    $server = "localhost";
    $user = "sugirayvan";
    $passw = "GhostOfYvan";
    $db = "rev";
 
    $connection = mysqli_connect($server,$user,$passw,$db);

    if($connection){
        echo "<h1>Connection has been successful.<h1>";
        $query = "INSERT INTO signRev(firstName,userName,email,pass,telephone) VALUES('$firstname','$username','$email','$pass','$tele')";
        $result = mysqli_query($connection,$query);
          
        if($result){
            echo "<h1>Registration has been successful<h1>";
            echo '<a href="read.php" id="read">Read</a>';
        }
        else{
            echo "<h1>Registration has failed</h1>";
        }
    }
    else{
        echo "<h1>Connection has failed<h1>";
    }
}

?>
<link rel="stylesheet" href="./revSignUp.css" />