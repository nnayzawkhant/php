<?php 
  include("include/header.php");
?>
    <div class="row">
        <div class="col-12">
            <h3>New Article</h3>
        </div>
        <div class="col-12">
            <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="new file">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Summary</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="summary" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
            </form>
        </div>
    </div>
<?php 
 include('include/footer.php')
?>