

<?php 
    include("include/function.php");

    if($_POST){
        $errors= [];
        if(empty($_POST['name'])){
            $errors['name'] = 'Please provide name value';
        }
        if(empty($_POST['price'])){
            $errors['price'] = 'Please provide price value';
        }
        if(empty($_POST['in_stock'])){
            $errors['in_stock'] = 'Please provide in_stock value';
        }

        if(!empty($errors)){
            header("Location: edit.php?id=".$id);
        }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $in_stock = $_POST['in_stock'];

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

        if(update($id, $name, $price, $filename, $in_stock)){
            header("Location: index.php");
        } else {
            header("Location: edit.php?id=".$id);
        }
    }
?>