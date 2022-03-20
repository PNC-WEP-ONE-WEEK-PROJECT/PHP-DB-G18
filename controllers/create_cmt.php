
<?php
require_once "../models/post.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $description = $_POST['comment'];
    $time_release = $_POST['time'];
    $post_id = $_POST['id'];
    $user_id = $_POST['user_id'];
    // -------------------get image name to folder image and use it-------- 
    if(!empty($description) and !empty($time_release)){
       createComments($description,$time_release,$post_id,$user_id);
    }
}
header('location: ../index.php');
?>
