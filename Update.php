
<?php

if(isset($_GET['UpdateId'])){
$server = "localhost";
$user = "sugirayvan";
$passw = "GhostOfYvan";
$db = "rev";

$currentId = $_GET['UpdateId'];
$connection = mysqli_connect($server,$user,$passw,$db);

if($connection){
    $query = "SELECT userId,firstname,username,email,telephone FROM signRev WHERE userId=$currentId";
    $result = mysqli_query($connection,$query);

    $data = mysqli_fetch_all($result);
}

?>

<form action="makeChanges.php" method="POST">
      <p>Update User</p>
       <label>User Id</label><br />
      <input type="text" name="userId" value= "<?php echo $currentId ?> " readonly><br>
      <label>Firstname</label><br />
      <input type="text" name="fname" value= <?php print_r($data[0][1]); ?>><br>
      <label>Username</label><br />
      <input type="text" name="uname" value= <?php print_r($data[0][2]); ?>><br />
      <label>Telephone</label><br />
      <input type="text" name="tele" value= <?php print_r($data[0][4]); ?>><br />
      <label>Email</label><br />
      <input type="text" name="email" value= <?php print_r($data[0][3]); ?>><br />
      <input type="submit" name="submit" id="submit" value="Update Profile"/>
</form>
<img src="./undraw_mobile_user_re_xta4.svg" />
<link rel="stylesheet" href="./revSignUp.css" />
<?php
}
else{
    echo "<h1>User's id wasn't provided";
}
?>
<style>

    p{
        margin-top:60px;
        margin-left:50px;
    }
</style>