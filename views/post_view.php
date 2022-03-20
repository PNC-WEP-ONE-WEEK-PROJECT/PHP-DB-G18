<!-- contanter for posts -->
<div class="container p-2 w-50 ">
<div class="form-group">
    <a href="views/create_post.php"><button type="button" class="btn btn-primary btn-block form-control">post</button></a>
</div>
<?php
    require_once "models/post.php";
    $views = getItems();
    foreach ($views as $view): 
        // var_dump($view);
       
    ?>
    <!-- ---------------------------post_view------------------------------  -->
                    <div class="row ">
                        <div class="col-12 ">
                            <div class="card mb-3  ">
                                <div class="card-body border border-top">
                                    <div class="d-flex justify-content-between ">
                                        <div class="d-flex justify-content-between ">
                                                <i class='far fa-user-circle' style='font-size:55px;color:blue'></i>
                                                <a href="#" class="m-3 " style='font-size:25px;'>PHANITH</a>
                                        </div>
                                            <div class="dropdown">
                                                <h3 class="text-white dropdown-toggle " data-bs-toggle="dropdown"><li class="text-primary">...</li></h3>
                                                <ul class="dropdown-menu">
                                                        <a href="../views/edit_post.php?id=<?= $view['id'] ?>" class=" text-primary dropdown-item "><i class='far fa-edit p-2' style='font-size:24px'></i></a>
                                                        <a href="../controllers/delete_post.php?id=<?= $view['id'] ?>" class=" text-danger dropdown-item "><i class="fa fa-trash p-2" style='font-size:24px'></i></a>
                                                </ul>
                                            </div>
                                    </div>
                                    <div>
                                        <h2 class="display-7 text-capitalize"><?= $view['caption'] ?></h2>
                                        <h6 class="display-9 text-primary"><?= $view['dateOfTime'] ?></h6>
                                        <img src="images/<?= $view['image'] ?>" alt="" width="600px">
                                       <label for="<?= $view['id'] ?>">comment</label>
                                        
                                        <?php 
                                            $post_id= $view['id'];
                                            echo $post_id;
                                            $allCmts = getCommentId($post_id);
                                            foreach($allCmts as $allCmt):
            
                                        ?>

                                       
                                        <p ><?= $allCmt['description'] ?> </p>
                                        <!-- <input type="hidden" value="<?php $allCmt['time_comment']?>">              -->
                                        <?php
                                            endforeach;
                                        ?>

                                    </div>
                                    <form action="../controllers/create_cmt.php" method="post"  enctype="multipart/form-data">
                                        <input type="text" name="comment" id="<?= $view['id'] ?>" placeholder="white a comment...">
                                        <input type="hidden" id="post_id" name="id" value="<?= $view['id']?>">
                                        <input type="hidden" id="userID" name="user_id" value="1">
                                        <input type="hidden" class="form-control" id="datemin" placeholder="Bith day" name="time" min="2000-01-02" value="<?php echo date("y-m-d")?>">
                                        <button  type="submit">send</button>
                                    </form>
                            </div>
                        </div>
                    </div>
    </div> 
        
<?php
    endforeach;
?>


<!-- ---------------------------comment_view--------------------------------------->

