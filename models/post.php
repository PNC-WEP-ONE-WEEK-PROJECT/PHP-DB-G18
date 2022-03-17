<?php
// database connection
// require_once("database.php");
$database = new PDO('mysql:host=localhost;dbname=facebook_vc3','root','');

function getItems()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM posts ORDER BY post_id DESC");
    $statment->execute();
    return $statment->fetchAll();
}
function getItemById($id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM posts where id = :id");
    $statment->execute([
        ':id' => $id,
    ]);
    return $statment->fetch();
}
function createItems($desciption, $dateTime,$postImage,$user_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO posts(caption,image,dateOfTime,user_id) VALUE(:desciption,:postImage,:dateTime,:user_id)");
    $statment->execute([
        ':desciption'=>$desciption,
        ':dateTime'=>$dateTime,
        ':postImage'=>$postImage,
        ':user_id'=>$user_id,
    ]);
    return $statment->rowCount() >0 ;
}
function deleteItem($id)
{
   global $database;

   $database->query("DELETE FROM posts WHERE post_id = $id");
//    $statment->execute([':id' => $id]);
}