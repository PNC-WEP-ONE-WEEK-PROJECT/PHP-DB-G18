<!-- 
<?php 
require_once '../templates/header.php';
require_once('../models/post.php');
    isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
    $post = getItemById($id);
?>
<div class="container p-2 w-50">
    <form action="../controllers/create_cmt.php" method="post" >
        <div class="form-group">
            <label for="<?= $view['post_id'] ?>"></label>
            <button type="submit" class="btn btn-primary btn-block form-control" >comment</button>
            <input type="hidden" id="post_id" name="id" value="<?= $post['post_id']?>">
            <input type="hidden" id="userID" name="user_id" value="1">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="comment.." name="comment">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="datemin" placeholder="Bith day" name="time" min="2000-01-02" value="<?php echo date("y-m-d")?>">
        </div>
    </form>
</div> -->
