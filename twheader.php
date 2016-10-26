<?php
function active($currect_page){
 $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
 $url = end($url_array);  
 if($currect_page == $url){
     echo "navigation__button--currentPage"; //class name in css 
 }	else {
 	echo "navigation__button";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trent Walton | Trent Walton's Web Site</title>

	<link rel="stylesheet" type="text/css" href="trent.css">

</head>
<body>

<div class="header">
	<a href="trentwalton.php"><img class="home__button" src="twpics/tw.png"></a>
		<div class= navigation>
			<a href="articles.php" class="<?php active('articles.php');?>">ARTICELS</a>
			<a href="notes.php" class="<?php active('notes.php');?>">NOTES</a>
			<a href="http://trentwalton.com/info" class="<?php active('http://trentwalton.com/info');?>">INFO</a>
			<a href="http://trentwalton.com/info" class="<?php active('http://trentwalton.com/info');?>">SEARCH</a>
		</div>
</div>