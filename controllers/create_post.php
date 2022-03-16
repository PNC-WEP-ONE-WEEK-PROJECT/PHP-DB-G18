<?php
require_once "../models/post.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $desciption = $_POST['desciption'];
    $dateTime = $_POST['dateTime'];
    $postImage = $_POST['postImage'];
    if(!empty($desciption) and !empty($dateTime) and !empty($postImage)){
        $isCreated=createItems($desciption,$dateTime,$postImage,1);
        if($isCreated){
            header("Location:../index.php");
        }else{
            header("Location:../views/create_view.php");
        }
    }

    
}

?>