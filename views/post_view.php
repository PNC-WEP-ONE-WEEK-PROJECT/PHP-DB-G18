<!-- contanter for posts -->
<div class="container p-2 ">
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
                        <h2 class="display-5 text-capitalize"><?= $view['caption'] ?></h2>
                        <h6 class="display-6 text-primary"><?= $view['dateOfTime'] ?></h6>
                        <h6 class="display-6 text-capitalize"><?= $view['image'] ?></h6>

                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-primary mr-1"><i class="fa fa-pencil">edit</i></a>
                            <a href="" class="btn btn-danger mr-1"><i class="fa fa-trash">delete</i></a>
                        </div>
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