
<?php
require_once "../models/post.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $desciption = $_POST['desciption'];
    $dateTime = $_POST['dateTime'];
    $postImage = $_POST['postImage'];
    // -------------------get image name to folder image and use it-------- 
    $postImage = $_FILES['postImage']['name'];
    $folder="../images/".$postImage;
    move_uploaded_file($_FILES['postImage']['tmp_name'],$folder);
    
    if(!empty($desciption) and !empty($dateTime) and !empty($postImage)){
        $isCreated=createItems($desciption,$dateTime,$postImage,1);
        if($isCreated){
            header("Location:../index.php");
        }else{
            header("Location:../views/post_view.php");
        }
    }
}
?>