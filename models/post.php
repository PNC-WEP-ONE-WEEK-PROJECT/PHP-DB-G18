<?php
// database connection
// require_once("database.php");
$database = new PDO('mysql:host=localhost;dbname=facebook_vc3','root','');

function getItems()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM posts ORDER BY id DESC");
    $statment->execute();
    return $statment->fetchAll();
}
// ------------------------get id------------------------
function getItemById($id)
{
    global $database;
    $statment = $database->prepare("SELECT * FROM posts where id = :id");
    $statment->execute([
        ':id' => $id,
    ]);
    return $statment->fetch();
}
// -------------------------get user ID-------------------- 
function getUserById($id)
{
    global $database;
    $statment = $database->prepare("SELECT * FROM users where user_id = :id");
    $statment->execute([
        ':id' => $id,
    ]);
    return $statment->fetch();
}
// -----------funtion for create post---------------- 
function createItems($desciption, $dateTime,$postImage,$user_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO posts (caption,image,dateOfTime,user_id) VALUE(:desciption,:postImage,:dateTime,:user_id)");
    $statment->execute([
        ':desciption'=>$desciption,
        ':dateTime'=>$dateTime,
        ':postImage'=>$postImage,
        ':user_id'=>$user_id,
    ]);
    return $statment->rowCount() >0 ;
}
// -------------Function for delete all that posts--------------------------
function deleteItem($id)
{
   global $database;
   $database->query("DELETE FROM posts WHERE id = $id");
}
//------------- Function for update or edit all that posts------------------- 
function updateItem($id, $image, $caption)
{   
    // echo $image, die;
    global $database;
    $statment = $database->prepare("UPDATE posts SET image = :image, caption = :caption where id = :id");
    $statment->execute([
        ':id'=> $id,
        ':image'=>$image,
        ':caption'=>$caption,
    ]);
}


// ----------------------------------funtion create_cmt---------------------------------------
function getAllComment()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM comment ORDER BY id DESC");
    $statment->execute();
    return $statment->fetchAll();
}

function createComments($description,$time_release,	$post_id,$user_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO comment (description,comment_date,postID,user_id) VALUE(:description,:time_release,:post_id,:id)");
    $statment->execute([
        ':description'=>$description,
        ':time_release'=>$time_release,
        ':post_id'=>$post_id,
        ':id'=>$user_id,
    ]);
    return $statment->rowCount() >0;
}

// ------------------------get id of comment------------------------
function getCommentId($post_id)
{
    global $database;
    $statment = $database->prepare("SELECT * FROM comments_on_post where id = :post_id");
    $statment->execute([
        ':post_id' => $post_id,
    ]);
    return $statment->fetchAll();
}
// --------------------update Comment------------------------------------ 
function updateCmt($id, $description, $comment_date)
{   
    // echo $image, die;
    global $database;
    $statment = $database->prepare("UPDATE comment SET id = :id, description = :description ,comment_date= :comment_date where id = :id");
    $statment->execute([
        ':id'=> $id,
        ':description'=>$description,
        ':comment_date'=>$comment_date,
      
    ]);
}