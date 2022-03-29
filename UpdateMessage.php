<?php

if(isset($_POST['submit'])){
  
    $userid = $_POST['userId'];
    $firstname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];

    $server = "localhost";
    $user = "sugirayvan";
    $passw = "GhostOfYvan";
    $db = "rev";
 
    $connection = mysqli_connect($server,$user,$passw,$db);

    if($connection){
        echo "<h1>Connection has been successful.</h1>";
        $query = "UPDATE signRev SET email='$email',firstname='$firstname',username='$username',telephone='$tele' WHERE userId=$userid";
        $result = mysqli_query($connection,$query);

        if($result){
            echo "<h1>Update has been successful.</h1><br>";
            echo '<a href="Signread.php">Read</a>';
        }
        else{
            echo "<h1>Registration has failed</h1>";
        }
    }
    else{
        echo "<h1>Connection has failed</h1>";
    }
}

?>
<link rel="stylesheet" href="./revSignUp.css" />
<style>
h1 {
  margin-top:100px;
  color: #6ae99fc4;
  font-size: 50px;
  font-family: "Brandon Grotesque Medium";
  font-variant: italic;
  font-weight: 900;
  text-align: center;
  margin-left: 0px;
}
a{
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left:20px;
    padding-right:20px;
    background-color: #6ae99fc4;
    color:#000;
    font-size: 30px;
    font-family: "Brandon Grotesque Medium";
     font-variant: italic;
     font-weight: 900;
    text-align: center;
    margin-left: 700px;
    text-decoration: none;
}
</style>