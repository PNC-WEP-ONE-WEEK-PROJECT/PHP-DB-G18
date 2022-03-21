<!-- contanter for posts -->

<div class="container w-50 ">
    <div class="form-group">
        <a href="views/create_post.php"><button type="button" class="btn btn-primary btn-block form-control">Add post</button></a>
    </div>
    <?php
    require_once "models/post.php";
    $views = getItems();
    foreach ($views as $view) :
        // var_dump($view);

    ?>
        <!-- ---------------------------post_view------------------------------  -->
        <div class="row ">
            <div class="col-12 ">
                <div class="card mb-3 border_3 ">
                    <div class="card-body border  ">
                        <div class="d-flex justify-content-between ">
                            <!-- ---------------------------------- block profile------------------------------------  -->
                            <div class="d-flex justify-content-between">
                                <div class="w-25">
                                    <img src="../images/T.rady.jpg" alt="" width="50px" style="border-radius: 50px 50px;">
                                </div>
                                <h5 class="p-3">T.Rady Y</h5>
                            </div>

                            <!-- ---------------------------------- block MODAL delete and edit------------------------------------  -->
                            <h2 class="text-primary" data-bs-toggle="modal" data-bs-target="#myModal">...
                            </h2>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Are you sure ?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body d-flex justify-content-around ">
                                            <a href="../views/edit_post.php?id=<?= $view['id'] ?>" class=" text-primary "><i class='far fa-edit ' style='font-size:24px; padding:10px;'></i>Edit</a>
                                            <a href="../controllers/delete_post.php?id=<?= $view['id'] ?>" class=" text-danger "><i class="fa fa-trash" style='font-size:24px; padding:10px; text'></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- --------------------------------- Display Post---------------------------------------------------------------  -->
                        <div class="">
                            <h6 class="display-7 text-capitalize"><?= $view['caption'] ?></h6>
                            <p class="display-9 text-primary"><?= $view['dateOfTime'] ?></p>
                            <img src="images/<?= $view['image'] ?>" alt="" width="620px">
                            <!-- ------------------------------- for comment------------------------------------------------  -->
                            <hr>
                            <div class="d-flex justify-content-around">

                                <button type="button" class="btn btn-default btn-sm btn-white">
                                    <i class='far fa-thumbs-up' style='font-size:25px;color:#7f8c8d;'></i>
                                </button>

                                <button type="button" class="btn btn-default btn-sm btn-white ">
                                    <label for="<?= $view['id'] ?>"><i class='far fa-comment-alt' style='font-size:25px; color:#7f8c8d;'></i></label>
                                </button>

                                <button type="button" class="btn btn-default btn-sm btn-white ">
                                    <i class='far fa-share-square' style='font-size:25px;color:#7f8c8d;'></i>
                                </button>

                            </div>
                            <hr>
                            <?php
                            $post_id = $view['id'];
                            // echo $post_id;
                            $allCmts = getCommentId($post_id);
                            foreach ($allCmts as $allCmt) :

                            ?>
                                <p><?= $allCmt['description'] ?> </p>
                            <?php
                            endforeach;
                            ?>

                        </div>
                        <form action="../controllers/create_cmt.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="post_id" name="id" value="<?= $view['id'] ?>">
                            <input type="hidden" id="userID" name="user_id" value="1">
                            <input type="hidden" class="form-control" id="datemin" placeholder="Bith day" name="time" min="2000-01-02" value="<?php echo date("y-m-d") ?>">
                            <div class="d-flex justify-content-between">
                                <input type="text" class="border w-100  " name="comment" id="<?= $view['id'] ?>" placeholder="write a comment...">
                                <button type="submit" class="border border"><i class="material-icons" style="font-size:36px; color:blue;">send</i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    <?php
    endforeach;
    ?>


    <!-- ---------------------------comment_view--------------------------------------->