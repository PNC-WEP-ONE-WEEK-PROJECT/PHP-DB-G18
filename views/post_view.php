<!-- contanter for posts -->
<div class="container p-2 w-50 ">
<?php
    require_once "models/post.php";
    $views = getItems();
    foreach ($views as $view): 
        // var_dump($view);
       
    ?>
          <div class="row ">
            <div class="col-12 ">
                <div class="card mb-3  ">
                    <div class="card-body border border-top">
                        <div class="d-flex justify-content-end">
                            <a href="../views/edit_post.php?id=<?= $view['post_id'] ?>" class="btn btn-primary mr-1"><i class="fa fa-pencil">edit</i></a>
                            <a href="../controllers/delete_post.php?id=<?= $view['post_id'] ?>" class="btn btn-danger mr-1"><i class="fa fa-trash">delete</i></a>
                        </div>
                        <h2 class="display-7 text-capitalize"><?= $view['caption'] ?></h2>
                        <h6 class="display-9 text-primary"><?= $view['dateOfTime'] ?></h6>
                        <img src="images/<?= $view['image'] ?>" alt="" width="600px">
                    </div>
                    <div class="form-group form-control d-flex justify-content-around border border-white">
                        <i class='far fa-thumbs-up' style='font-size:33px;color:blue'></i>
                        <span class="font-m">comment</span>
                        <i class='fas fa-share' style='font-size:36px'></i>
                    </div>

                    <div class="form-group form-control d-flex justify-content-between">
                        <input type="text" class="form-control border border-white" placeholder="comment..." name="item">
                        <input type="date" class="border border-white bg-light" id="datemin" placeholder="Bith day" name="datemin" min="2000-01-02">
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