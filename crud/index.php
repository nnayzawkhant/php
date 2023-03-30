<?php 
  include("include/header.php");
  include("include/function.php");
  $articles = select();
?>
      <div class="row">
        <div class="col-12">
          <h3>Articles</h3>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="col-12">
              <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Summary</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($articles as $article):
            ?>
              <tr>
                <th scope="row"><?php echo $article['id']; ?></th>
                <td><?php echo $article['title']; ?></td>
                <td><img src="/php/crud/uploads/<?php echo $article['image']; ?>" alt="" width="100px"></td>
                <td><?php echo $article['summary']; ?></td>
                <td><?php echo $article['created_at']; ?></td>
                <td>
                  <form action="delete.php" method="POST">
                    <input type="hidden" value="<?php echo $article['id']?>" name="id">
                    <button type="submit" onclick="return confirm('are you sure to delete?')"><i class="bi bi-trash"></i></button>
                    <a href="edit.php?id=<?php echo $article['id']?>"><i class="bi bi-pencil-square"></i></a>
                  </form>
                </td>
              </tr>
            <?php 
              endforeach;
            ?>
          </tbody>
        </table>
        </div>
        <div class="col-12">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
        </div>
      </div>
<?php 
 include('include/footer.php')
?>