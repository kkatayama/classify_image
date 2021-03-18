# classify_image
A PHP app that decodes base64 image data from a POST request and exports it to **capture.jpg**

The decoded image is accessible locally and at [https://classify.hopto.org/capture.jpg](https://classify.hopto.org/capture.jpg)

## Demo
<p align="center">
    ![https://classify.hopto.org/capture.jpg](https://classify.hopto.org/capture.jpg)
</p>

## Running

``` bash
https://github.com/kkatayama/classify_image.git

cd classify_image

php -S 0.0.0.0:8094 -t $PWD
```

Live server is running at [https://classify.hopto.org](https://classify.hopto.org)

## Source
#### index.php
``` php
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
```


