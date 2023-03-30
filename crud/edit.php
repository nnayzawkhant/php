<?php 
  include("include/header.php");
  include("include/function.php");
  $id = $_GET['id'];
  if(!$id){
    header("Location: index.php");
  } 
  $article = select_one($id);
?>
    <div class="row">
        <div class="col-12">
            <h3>Update Article</h3>
        </div>
        <div class="col-12">
            <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input value="<?php echo $article['title']; ?>" type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image
                    <img src="/php/crud/uploads/<?php echo $article['image']; ?>" alt="" width="100px">
                    <input type="file" class="form-control" value="<?php echo $article['image']; ?>" name="image" id="exampleFormControlInput1" placeholder="new file">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Summary</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="summary" rows="3"><?php echo $article['summary']; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>"/>
            <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </form>
        </div>
    </div>
<?php 
 include('include/footer.php');
?>