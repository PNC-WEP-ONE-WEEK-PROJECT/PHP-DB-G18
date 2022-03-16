<?php
// database connection


/**
 * Get all items  
 * @return array of items 
 */
function getItems()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM item ORDER BY id DESC");
    $statment->execute();
    return $statment->fetchAll();
}

/**
 * Get a single item
 * @param integer $id :  the item id
 * @return the item related to given item id
 */
function getItemById($id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM item where id = :id");
    $statment->execute([
        ':id' => $id,
    ]);
    return $statment->fetch();
}

/**
 * Remove   item related to given item id
 * @param integer $id :  the item id
 * @return true if deletion was successful, false otherwise
 */
function deleteItem($id)
{
   global $database;
   $statment = $database->prepare("DELETE FROM item WHERE id = :id");
   $statment->execute([':id' => $id]);
}

/**
 * Update a Item given id and attibutes
 * @param integer $id :  		the item id
 * @param string $item :  		the item item
 * @param integer $price :  		the item price
 * 
 
 * @return true if deletion was successful, false otherwise
 */
function updateItem($id, $item, $price)
{
    global $database;
    $statment = $database->prepare("UPDATE item SET  item = :item, price = :price where id = :id");
    $statment->execute([
        ':id'=> $id,
        ':item'=>$item,
        ':price'=>$price,
    ]);
}

/**
 * Create a new item 
 * @param string $item :  		the item name
 * @param integer $price :  		the price
 
 * @return true if create was successful, false otherwise
 */
function createItems($item, $price)
{
    global $database;
    $item = $_POST['item'];
    $price = $_POST['price'];
    $statment =$database->prepare("INSERT INTO item(item,price) VALUE(:item,:price)");
    $statment->execute([
        ':item'=>$item,
        ':price'=>$price,
    ]);
    return $statment->rowCount() >0 ;
}
