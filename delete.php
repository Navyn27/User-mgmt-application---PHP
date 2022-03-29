<?php
  
    $userid = $_GET['DeleteId'];

    $server = "localhost";
    $user = "sugirayvan";
    $passw = "GhostOfYvan";
    $db = "rev";
 
    $connection = mysqli_connect($server,$user,$passw,$db);

    if($connection){
        echo "<h1>Connection has been successful.</h1>";
        $query = "DELETE FROM signRev WHERE userId=$userid";
        $result = mysqli_query($connection,$query);

        if($result){
            echo "<h1>Deletion has been successful.</h1>";
            echo '<h1><a href="read.php">Read</a></h1>';
        }
        else{
            echo "<h1>Deletion has failed</h1>";
            echo mysqli_error($connection);
        }
    }
    else{
        echo "<h1>Connection has failed</h1>";
    }

?>
<link rel="stylesheet" href="./revSignUp.css" />