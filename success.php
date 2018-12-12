<?php
// we want to restrict the user to direct acceess to this page without log in again
session_start();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>
  <?php 

if (isset($_SESSION["userKey"])){

    $msg   =  $_SESSION["userKey"];
?>
    <h1 style="text-align:center; color:white;  background-color: green;"> Login Success, <?php echo $msg ?> </h1> 
    <p class="btn btn-primary" >  <a  style="color:white; hover::display:inline-block;" href="logout.php"> logout </a>  </p>
<?php
} else {
    header("location:login.php");
}
?>

</body>
</html>