

<?php 
    include("include/function.php");

    if($_POST){
        $errors= [];
        if(empty($_POST['id'])){
            $errors['id'] = 'Please provide id value';
        }
        if(empty($_POST['title'])){
            $errors['title'] = 'Please provide title value';
        }
        if(empty($_POST['summary'])){
            $errors['summary'] = 'Please provide summary value';
        }

        if(!empty($errors)){
           header("Location: edit.php?id=".$id);
        }

        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];

        $filename = "";

        // Check if the image file was uploaded without errors
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
          $image = $_FILES['image'];
          // Get the file extension
          $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
          // Generate a unique filename to prevent overwriting existing files
          $filename = uniqid() . '.' . $extension;
          // Move the uploaded file to a directory on the server
          if (move_uploaded_file($image['tmp_name'], 'uploads/' . $filename)) {
            echo 'Image uploaded successfully!';
          } else {
            echo 'Failed to upload image.';
          }
        } else {
          echo 'Error uploading image.';
        }

        if(update($id, $title, $summary, $filename)){
            header("Location: index.php");
        } else {
            header("Location: edit.php?id=".$id);
        }
    }
?>