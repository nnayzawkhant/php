<?php 
  include("include/header.php");
  include("include/function.php");
  $id = $_GET['id'];
  if(!$id){
    header('Location: index.php');
  }
  $dishe = select_one($id);
?>
    <div class="row">
        <div class="col-12">
            <h3>New Resturant</h3>
        </div>
        <div class="col-12">
            <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $dishe['name'];?>" id="exampleFormControlInput1" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input type="text" class="form-control" value="<?php echo $dishe['price'];?>" id="exampleFormControlInput1" name="price" placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" value="<?php echo $dishe['image'];?>"  name="image" id="exampleFormControlInput1" placeholder="new file">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">In_Stock</label>
                <input type="text" class="form-control" value="<?php echo $dishe['in_stock'];?>" id="exampleFormControlInput1" name="in_stock" placeholder="In_Stock">
            </div>
            <input type="hidden" name="id" value="<?php echo $dishe['id']; ?>"/>
            <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
            </form>
        </div>
    </div>
<?php 
 include('include/footer.php')
?>