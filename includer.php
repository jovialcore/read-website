<!DOCTYPE html>

<html>
    <head>
<title> Jovial search testing platform. what developers need is those who are naturally ski </title>

<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

 
<body>


<?php
  /* $r = fopen("th.txt", "w") or die ("unable sir!");
        $txt = "john Doe\n";

        fwrite($r, $txt);
        $txt = "jane Doe\n";
        fwrite($r, $txt);
        fclose($r);

?>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
?>
<!--<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form> -->


<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname= 'gt';

//set DSN// data source name
try{
$dsn = "mysql:host={$host}; dbname={$dbname}";   



    //create a PDO example
    $pdo = new PDO($dsn, $user, $password);

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   
}
catch(PDOException $e)
    {
       echo "database error, sir!".  $e->getMessage();
    }





    # pdo query method

    //$stmt = $pdo ->query('SELECT * FROM chidi');

    //while($row = $stmt->fetch()){
     //     echo $row->title . '<br>';
   // }

   # making prepared statements (prepare and execute)

   //$sql = "SELECT * FROM chidi WHERE author = author";

   #FETCH MULTIPLE POSTS

   // useer input

//getting all the published posts
 
   //usinng positional params

//    $sql = 'SELECT *FROM chidi WHERE author= ?';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$author]);

//   $post = $stmt->fetchAll();



// //using named parameters
//     $sql = 'SELECT *FROM chidi WHERE author= :author && is_published = :is_published';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['author' =>$author, 'is_published' => $is_published]);

//     $post = $stmt->fetchAll();


// //    var_dump($post);
// foreach ($post as $blah ) {
//      echo $blah->title . "<br> ";

// Checking For Single posts

//     $sql = 'SELECT *FROM chidi WHERE id = :id';
//    $stmt = $ pdo->prepare($sql);
//    $stmt->execute(['id' => $id]);

//     $post = $stmt->fetch();
   
// }

// $sql = 'SELECT * FROM chidi WHERE id=:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post=$stmt->fetch();

// $post->title;
// echo $gt; 

// row counting

// $stmt = $pdo->prepare('SELECT * FROM chidi WHERE author=?');
// $stmt->execute(['$author']);
// $postCount = $stmt->rowCount();

// echo $postCount;
 
$title= "best post 5";
$body = "nri ogbara kasa nah ihea";
$author= "IMO";
$is_publish = "2";
$id=3;

// $sql = 'INSERT INTO chidi(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);

// echo 'Post added';
//update the id with the body of 1;

// delete data
// $sql = 'DELETE FROM chidi WHERE id=:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id"=>$id]);

// echo "deleted fah";

//search data


$stmt=$pdo->prepare('SELECT * FROM chidi WHERE author = ?' );

$stmt->execute([$author]);
$dan = $stmt->fetch();
//     if ($stmt->rowCount()===0) exit ("no rows, sir");
// while($dan = $stmt->fetchAll()){
//     echo $dan[] . "<br>";
// }
 
var_export($dan);
?>



</table>
</body>
</html>
 