
<div class="container p-2 ">
    <form action="../controllers/create_post.php" method="post" >
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block form-control">post</button>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="desciption" value="desciption">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="datemin" placeholder="Bith day" name="dateTime" min="2000-01-02" value="datetime">
        </div>
        <div>
        <input type="file" class="form-control" placeholder="" name="postImage" value="multiple">
        </div>
    </form>
</div>
