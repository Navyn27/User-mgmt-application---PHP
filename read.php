<?php
 $server = "localhost";
 $user = "sugirayvan";
 $passw = "GhostOfYvan";
 $db = "rev";

 $connection = mysqli_connect($server,$user,$passw,$db);

 
 if($connection){
     $query = "SELECT userId,firstname,username,email,telephone FROM signRev";
     $result = mysqli_query($connection,$query);

     $data = mysqli_fetch_all($result);
 }

 echo "<table cellspacing=\"12\"><tr><th>User Id </th><th>FirstName</th><th>Username</th><th>Email</th><th>Telephone</th><th colspan=2>Operations</th><tr>";

 for($i=0;$i<count($data);$i++){
     echo "<tr>";
     $currentId = $data[$i][0];
     for($n=0;$n<count($data[$i]);$n++){
        echo "<td>".$data[$i][$n]."</td>";
     }
     echo "<td><a  href='Update.php?UpdateId=.$currentId. '>Update</a></td>
           <td><a href='delete.php?DeleteId=.$currentId.'>Delete</a></td>
           </tr>";
 }

?>
<link rel="stylesheet" href="./revSignUp.css" />
<style>
    table{
        margin-left:250px;
        margin-top: 100px;
    }
    a{
        padding: 0 20px 0 0;
  background:transparent;
  color: #6ae99f;
  font-size: 20px;
  font-family: "Brandon Grotesque Medium";
  font-variant: italic;
  font-weight: 900;
  text-align: center;
  margin-left: 20px;
  text-decoration: none;
    }
</style>