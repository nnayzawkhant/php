

<?php 
    include("include/function.php");

    if($_POST){
        $errors= [];
        if(empty($_POST['id'])){
            $errors['id'] = 'Please provide id value';
        }

        if(!empty($errors)){
           header("Location: index.php");
        }

        $id = $_POST['id'];

        if(delete($id)){
            header("Location: index.php");
        } else {
            header("Location: index.php");
        }
    }
?>