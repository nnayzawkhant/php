<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurantphp";

function insert($name, $price, $image, $in_stock){
    
    try {
        global $servername, $username, $password, $database;
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "INSERT INTO dishe (name, price, image, in_stock)
        VALUES ('".$name."', '".$price."', '".$image."', '".$in_stock."')";
        // use exec() because no results are returned
        $conn->exec($sql);

        return true;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
    
}

// insert('name', '12', 'image', 12);

function select() {
    try { 
        global $servername, $username, $password, $database;
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM dishe");
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $records = $stmt->fetchAll();
        return $records;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
} 
// select('hello', '12', 13);

function select_one($id){
    try {
        global $servername, $username, $password, $database;
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM dishe WHERE id = $id");
        $stmt->execute();
      
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $record = $stmt->fetch();
        return $record;
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
      }
}

// echo "<pre>";
// print_r(select_one(1));


function update($id, $name, $price, $image, $in_stock){
    try {
        global $servername, $username, $password, $database;
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $sql = "UPDATE dishe SET name='".$name."', price='".$price."'";
        if($image){
            $sql.= ", image='".$image."'";
        }
        $sql.=  ", in_stock='".$in_stock."'";
        
        

        // $sql.= " WHERE id=$id;";
      
        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
      
        // echo a message to say the UPDATE succeeded
        return true;

      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
      }
      
}

// echo "<pre>";
// print_r(update(1, 'hello', 'myanmar'));

function delete($id){
    
try {
    global $servername, $username, $password, $database;
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to delete a record
    $sql = "DELETE FROM dishe WHERE id=$id";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    return true;
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    return false;
  }
}



?>