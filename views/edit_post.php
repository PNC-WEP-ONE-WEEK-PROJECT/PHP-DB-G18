<?php require_once('../models/post.php');
?>
<div class="container p-2 w-50">
    <?php 
    isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
    $post = getItemById($id);
    ?>
    <form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="post_id" value="<?=$post['post_id']?>" >    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="desciption" value="<?php echo $post['caption']?>">
        </div>
        <!-- <div class="form-group">
            <input type="date" class="form-control" id="datemin" placeholder="Bith day" name="dateTime" min="2000-01-02" value="<?= $post['dateOfTime']?>">
        </div> -->
        <div>
        <input type="file" class="form-control" placeholder="" name="postImage" >
        <input type="hidden" name="oldfile" value="<?= $post['image']?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block form-control">post</button>
        </div>
    </form>
</div>
