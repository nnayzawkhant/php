<?php 
  include("include/header.php");
  include("include/function.php");
  $dishe = select();
?>
      <div class="row">
        <div class="col-12">
          <h3>Resturant</h3>
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
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">In_Stock</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach($dishe as $dishe):
            ?>
              <tr>
                <th scope="row"><?php echo $dishe['id'];?></th>
                <td><?php echo $dishe['name'];?></td>
                <td><?php echo $dishe['price'];?></td>
                <td><?php echo $dishe['in_stock'];?></td>
                <td><img src="/php/phprestaurant/uploads/<?php echo $dishe['image'];?>" alt="" width="100px"></td>
                <td>
                  <form action="delete.php" method="POST">
                    <input type="hidden" value="<?php echo $dishe['id']?>" name="id">
                    <button type="submit"><i class="bi bi-trash"></i></button>
                    <a href="edit.php?id=<?php echo $dishe['id'];?>"><i class="bi bi-pencil-square"></i></a>
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