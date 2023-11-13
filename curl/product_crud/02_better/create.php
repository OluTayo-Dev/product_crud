<?php

 
  /** */  @var $pdo \PDO */
  require_once "database.php";


//Creating Errors Array
$errors = [];

//Input Validation Step 2
$title = '';
$price = '';
$description = '';

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
  $date = date('Y-m-d H:i:s');

 


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
    $imagePath = '';

    if ($image && $image['tmp_name']) {

      $imagePath = 'images/'.randomString(8).'/'.$image['name'];
      mkdir(dirname($imagePath));

      move_uploaded_file($image['tmp_name'], $imagePath);
    }
    

       $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                  VALUES (:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
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


 <h1>Create new Product</h1>


 <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
           <div><?php echo  $error ?></div>
        <?php endforeach; ?>
    </div>
 <?php endif; ?>


 <form action="" method="post" enctype="multipart/form-data">
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






