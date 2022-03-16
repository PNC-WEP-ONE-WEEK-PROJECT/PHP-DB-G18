<!-- contanter for posts -->
<div class="container p-2 ">
    <form action="../controllers/create_controller.php" method="post" id="" >
        <div class="form-group form-control d-flex justify-content-between">
            <input type="text" class="form-control border border-white " placeholder="description" name="item">
            <input type="date" class="border border-white bg-light " id="datemin" placeholder="Bith day" name="datemin" min="2000-01-02">
        </div>
        <div>
            <img src="../images/girl.jpg" class="img-thumbnail" alt="Cinque Terre" >
        </div>
<!-- contain for comment -->
    <div class="form-group form-control d-flex justify-content-around border border-white">
        <i class='far fa-thumbs-up' style='font-size:33px;color:blue'></i>
        <span class="font-m">comment</span>
        <i class='fas fa-share' style='font-size:36px'></i>
    </div>
    <div class="form-group form-control d-flex justify-content-between">
        <input type="text" class="form-control border border-white" placeholder="comment..." name="item">
        <input type="date" class="border border-white bg-light" id="datemin" placeholder="Bith day" name="datemin" min="2000-01-02">
    </div>
    </form>
</div>
</div> 