<?php
 $server = "localhost";
 $user = "sugirayvan";
 $passw = "GhostOfYvan";
 $db = "rev";

 $connection = mysqli_connect($server,$user,$passw,$db);

 
 if($connection){
     $query = "SELECT userId,firstname,username,email,telephone,ProfilePic,Extension FROM signRev";
     $result = mysqli_query($connection,$query);

     $data = mysqli_fetch_all($result);
    //  print_r($data);
  
 }  

 echo "<table cellspacing=\"12\"><tr><th>User Id </th><th>FirstName</th><th>Username</th><th>Email</th><th>Telephone</th><th colspan=2>Operations</th><th>Profile Pic.</th><tr>";

 for($i=0;$i<count($data);$i++){
     echo "<tr>";
     $currentId = $data[$i][0];
     for($n=0;$n<count($data[$i]);$n++){
        // echo $data[$i][$n];
        // echo " record";
        // echo "<br>";
        if($n<5){
        echo "<td>".$data[$i][$n]."</td>";
        }
        if($n==5){
            echo "<td><a href='Update.php?UpdateId=$currentId'>Update</a></td>
           <td><a href='delete.php?DeleteId=$currentId'>Delete</a></td>";  
            if($data[$i][$n]){
                $img='./images/'.$data[$i][0]. '.' .$data[$i][6] ;
                // echo "<td>".'<img class="img"src="'.$img.'>'."</td></tr>";
                echo "<td>"."<a href=\"makechanges.php\?UserId=$currentId\"><img src=\" ". $img."\" class=\"plus\"></a>"."</td>" . "</tr>";
            }
            else{
                echo "<td>"."<a href=\"makechanges.php\?UserId=$currentId\"><img src=\"./plus-svgrepo-com.svg\" class=\"plus\"></a>"."</td>" . "</tr>";
            }
        }
     } 
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
.plus {
  margin-left:20px;
  margin-top:0px;
  height: 30px;
  width: 30px;
}
</style>