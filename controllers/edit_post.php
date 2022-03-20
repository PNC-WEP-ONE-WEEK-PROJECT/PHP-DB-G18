<?php
require_once "../models/post.php";
// PDO statement   
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['post_id'];
    $caption = $_POST['desciption'];
    $image = $_POST['oldfile'];
    if (!empty($_FILES['postImage']['name'])){
       $image = $_FILES['postImage']['name'];
    }

    if(!empty($image) and !empty($caption))
    {
        updateItem($id, $image, $caption);     
    }

    updateItem($id, $image, $caption);
}
header('Location: ../index.php');
?>