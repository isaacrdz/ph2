<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog</title>
	<? include "comunes/link.php" ?>
 </head>
 <body>
 <? include "comunes/header.php" ?>


 <? 

 if (isset($_GET['n'] )) {
 	include 'contenido/contenido-blog-solo.php';
 }else{

 	include 'contenido/contenido-blog.php';
 }

 	

 ?>











 <? include "comunes/footer.php" ?>
 	
 </body>
 </html>