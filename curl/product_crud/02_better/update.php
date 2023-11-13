<?php
  
  /** */  @var $pdo \PDO  */
  require_once "database.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');

    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);



//Creating Errors Array
$errors = [];

//Input Validation Step 2
$title = $product['title'];
$price = $product['price'];
$description = $product['description'];

// Using super globus for Methods
//  echo '<pre>';
//  var_dump($_POST);
//  echo '</pre>';
 

//Using the super globus for Files
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>'; 

//Using the super globus method to check Method in the Server
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

//To Check and Display Server Request Method in the database and User Interface
//echo _$SERVER['REQUEST_METHOD']. '<br>';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  $title = $_POST['title']; // test
  $description = $_POST['description'];
  $price = $_POST['price'];
  
 


 //Input Validation
 if (!$title) {
       $errors[] = 'Product title is required';
 }

 if(!$price) {
    $errors[] = 'Product price is required';
 }

if (!is_dir('images')) {
  mkdir('images');
}

 $imagePath = 'images/'.randomString(8).'/'.$image['name'];

echo '<pre>';
var_dump($imagePath);
echo '</pre>';


 
  if (empty($errors)) {

    //To Store Image in the database
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];


    if ($image && $image['tmp_name']) {

      if ($product['image']) {
        unlink($product['image']);
       }

      $imagePath = 'images/'.randomString(8).'/'.$image['name'];
      mkdir(dirname($imagePath));

      move_uploaded_file($image['tmp_name'], $imagePath);
    }
    

       $statement = $pdo->prepare("UPDATE  products SET title = :title, 
       image= :image, description = :description, 
       price = :price WHERE id=:id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        // To create redirect from the one file to another
        header('Location: index.php');
    }
}


//Function for Imgage Upload
 function randomString($n)
 {
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $str = '';

   for ($i =0; $i <$n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
    
   }

   return $str;
 }

?>

  <?php include_once "views/partials/header.php"; ?>

    <p>
        <a href="index.php " class="btn btn-secondary">Go Back to Products</a>
    </p>
 <h1>Update Product<b><?php echo $product['title'] ?></b></h1>


 <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
           <div><?php echo  $error ?></div>
        <?php endforeach; ?>
    </div>
 <?php endif; ?>


 <form action="" method="post" enctype="multipart/form-data">

    <?php if ($product['image']) :?> 
        <img src="<?php echo $product['image'] ?>" class="update-image">
    <?php endif; ?>


  <div class="form-group">
    <label>Product Image</label>
    <input type="file" name="image">
  </div> <br>

  <div class="form-group">
    <label>Product Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
  </div>

  <div class="form-group">
    <label>Product Description</label>
    <textarea  class="form-control" name="description"><?php echo $description?></textarea>
  </div>

  <div class="form-group">
    <label>Product Price</label>
    <input type="number" step=".01" name="price" value="<?php echo $price ?>"class="form-control">
  </div>
  
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>


 
   
</body>
</html>






