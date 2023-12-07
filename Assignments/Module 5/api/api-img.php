<?php
    
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr = json_decode(file_get_contents("php://input"), true);

include('dbconnection.php');

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && in_array($extension, $allowedExts)) {

      if ($_FILES["file"]["error"] > 0) {

        echo json_encode(array('status' => 'error', 'msg' => 'File could not be uploaded.'));

      } else {

        //Move the file to the uploads folder
        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);

        //Get File Location
        $filelocation = 'http://localhost/Assignments/Module%5/api/uploads/'.$_FILES["file"]["name"];

        //Get the File Size
        $size = ($_FILES["file"]["size"]/1024).' kB';

        //connect to Database
        $sql="INSERT INTO images (filelocation, size) VALUES ( '$filelocation', '$size')");
		mysqli_query($conn,$sql);

        //Return the data in JSON format
        echo json_encode(array('status' => 'success', 'data' => array('filelocation' => $filelocation, 'size' => $size)));
      }
    } else {
      //File type was invalid, so throw up a red flag!
      echo json_encode(array('status' => 'error', 'msg' => 'Invalid File Format'));
    }
?>

