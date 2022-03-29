<?php

if(isset($_POST['submit'])){

    $firstname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass = $password;
    $tele = $_POST['tele'];

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