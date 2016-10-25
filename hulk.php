<?php

   $currentPage = "Notes";

   function isCurrentPage($pageName, $currentPage) {
      if ($pageName == $currentPage) {
         echo "page__link--currentPage";
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="trent.css">
	<style type="text/css">a {text-decoration: none}</style>
</head>
<body>

<div class="header">


	<img src="TrentWalton2.jpg" class="logo">
	
		<div class="page">
         	<a href="article.php" class="page__link">ARTICLES</a>
         	<a class="page__link <?php isCurrentPage("Notes", $currentPage); ?> " href="hulk.php">NOTES</a>
			<a href="..." class="page__link">INFO</a>
			<a href="..." class="page__link">SEARCH</a>
		</div>
</div>
		
<div class= "notes-container">

	
	<a href="#" class="section__title" >The Marvel Symphonic Universe</a>
	<a href="#" class="note__dateresponse">Sep 12th, 2016-- Leave a Response</a>

	<p class="note__description">
		First off, every <a href="#">Every Frame a Painting</a> video is worth your time, but the latest one about the state of cinematic music compostion is extra fascinating.  I found lots of parallels for any industry that can be tempted to (over)imitate itself-especially when the process includes lots of people and phases.
	</p>

	
		
	<p class="note__description">
		Creativity and uniqueness take some risk.
	</p>

	<div class="video-wrapper">
		<iframe class="note__media" src="https://www.youtube.com/embed/7vfqkvwW2fs" frameborder="0" allowfullscreen></iframe>
	</div> 
		
	<p class="note__description">Tagged: <a href="..."> Design</a>,<a href="..."> Process </a> 
	</p>

	<div class="responses">
		<h3 class="h3 section__title">0 Responses</h3>
		
		<p class="comment"><a href="...">Leave a comment</a> or contact me via Twitter<a href="...">@TrentWalton</a></p>
	</div>

	<div class="form">
		<h3 class="h3 section__title"">Leave a Reply</h3>

		<form>
			<p class="form-field"><input type="text" name="wholename" class="input">Name (required)</p>
			<p class="form-field"><input type="text" email="email" class= "input">Email (required)</p>
			<p class="form-field"><input type="text" website="website" class= "input">Website</p>
			<textarea name=""comment" class="textarea"></textarea>
			<button type="submit" name="submit" class="button">Submit</button>
		</form>
	</div>

</div>

<div class="footer"> 

  <div class="bottom">
		<a href= "..." > <img src="..." class="bottom__twitter">FOLLOW ME ON TWITTER</a>
	 <div class="bottomright">
		<a href= "..." ><img src="..." class="bottom__hire"> HIRE PARAVEL</a>
		<a href="..."><img src=".." class="bottom__rss"> RSS FEED</a>
	 </div>
  </div>


</div>