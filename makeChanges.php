
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image upload</title>
  </head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data">
      <label>File upload</label><br />
      <input type="file" name="image" value="" /><br />
      <input type="submit" value="Upload" />
      <a href="/Workplace/CRUD_user_mgmt/read.php">Read</a>
    </form>
  </body>

<?php 

    $currentId = $_GET['UserId'];
    echo $currentId."<br>";
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
    
    if($_FILES['image']['error']){
        echo $fileUploadErrors[$_FILES['image']['error']];
    }
    else{
    if(isset($_FILES['image'])){
        $fileParts = explode(".",$_FILES['image']['name']);
        $fileExtension = $fileParts[sizeof($fileParts,1)-1];
        if(in_array($fileExtension,$extensions,1)){

            $server = "localhost";
            $user = "sugirayvan";
            $passw = "GhostOfYvan";
            $db = "rev";

            $connection = mysqli_connect($server,$user,$passw,$db);

            if($connection){
                $query = "UPDATE signrev SET ProfilePic = 1,Extension = '$fileExtension' WHERE userId=$currentId";
                $result = mysqli_query($connection,$query);
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$currentId. '.' .$fileExtension);
            echo "File uploaded successfully";
        }
        else{
            echo "File unsupported";
        }
    }
        // $fileExtension = $fileParts[sizeof($FileParts,1)-1];
        // move_uploaded_file($_FILES['image']['tmp_name'],'C:\xampp\htdocs\Workplace\images\ '.$_FILES['image']['name']);
        // echo '<br><br><br><br>'.$fileExtension.'<hr>';
    }
    
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    }
?>