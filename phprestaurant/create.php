<?php 
  include("include/header.php");
?>
    <div class="row">
        <div class="col-12">
            <h3>New Resturant</h3>
        </div>
        <div class="col-12">
            <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="new file">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">In_Stock</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="in_stock" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
            </form>
        </div>
    </div>
<?php 
 include('include/footer.php')
?>