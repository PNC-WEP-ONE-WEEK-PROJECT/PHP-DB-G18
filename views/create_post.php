
<div class="container p-2 w-50">
    <form action="../controllers/create_post.php" method="post"  enctype="multipart/form-data" >
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block form-control">post</button>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="desciption" value="">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="datemin" placeholder="Bith day" name="dateTime" min="2000-01-02" value="datetime">
        </div>
        <div>
        <input type="file" class="form-control" placeholder="" name="postImage" >
        </div>
    </form>
</div>
