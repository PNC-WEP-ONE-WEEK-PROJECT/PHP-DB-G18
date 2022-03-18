<?php
/**
 * Get code here to delete on post
 */
require_once ("../models/post.php");
isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
if ($id !== null)

    deleteItem($id);
    header('location: ../index.php');
}
?>
