<!-- contanter for posts -->
<div class="container p-2 w-50 ">
<?php
    require_once "models/post.php";
    $views = getItems();
    foreach ($views as $view): 
        // var_dump($view);
       
    ?>
          <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-primary mr-1"><i class="fa fa-pencil">edit</i></a>
                            <a href="../controllers/delete_post.php?id=<?= $view['post_id'] ?>" class="btn btn-danger mr-1"><i class="fa fa-trash">delete</i></a>
                        </div>
                        <h2 class="display-7 text-capitalize"><?= $view['caption'] ?></h2>
                        <h6 class="display-9 text-primary"><?= $view['dateOfTime'] ?></h6>
                        <img src="images/<?= $view['image'] ?>" alt="" width="620px">
                    </div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
?>
 </form>
</div>
</div> 