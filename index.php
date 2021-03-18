<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $_POST = json_decode(file_get_contents("php://input"),true);
     $image_data = $_POST['image_data'];
     file_put_contents("capture.jpg", file_get_contents($image_data));
  }
?>

<html>
 <head>
  <title>PHP Base64 Image Test</title>
 </head>
 <body>
   <img src="capture.jpg"></img>
 </body>
</html>
