 <?php
    //Magic constants
    echo __DIR__. '<br>';
    echo __FILE__. '<br>';

    echo __LINE__. '<br>';


    //Create directory

    mkdir('test');

    //Rename directory
    rename('test', 'test2');


    //Delete directory
    rmdir("test2");

    //Read files and folder inside directory
     echo file_get_contents('lorem.txt');

     $files = scandir('/');
     echo '<pre>';
     var_dump($files);
     echo '</pre>';

     //file_get_content, file_put_contents
     echo file_get_contents('lorem.text');
     file_put_contents('sample.txt', 'some Content');


    //file_get_content from URL
    $userJson = file_get_contents('https://jsonplaceholder.com')


    echo $userJson

    // To convert JSON file into array
    $users = json_decode($userJson)
    echo '<pre>';
    var_dum($users)
    echo '</pre>';

    //To check if file exit
    file_exists('sample.txt') //true
    is_dir('test') // false
 ?>