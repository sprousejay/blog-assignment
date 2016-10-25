<?php

   $currentPage = "Articles";

   function isCurrentPage($pageName, $currentPage) {
      if ($pageName == $currentPage) {
         echo "page__link--currentPage";
      }
   }

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Trent-Walton Website</title>
      <link rel="stylesheet" type="text/css" href="trent.css"/>
      
      <div class="header">


   <img src="TrentWalton2.jpg" class="logo">
   
      <div class="page">
         <a class="page__link <?php isCurrentPage("Articles", $currentPage); ?> " href="article.php"> ARTICLES</a>
         <a href="http://trentwalton.com/category/notes/" class="page__link">NOTES</a>
         <a href="http://trentwalton.com/info" class="page__link">INFO</a>
         <a href="http://trentwalton.com/search" class="page__link">SEARCH</a>
      </div>
</div>
      
      <div class="article-index-content">

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2016/02/atomic-classification-thumb-296x196.png">
               <div class="title-info">
                  <p class="article-title">Atomic Classification</p>
                  <p class="article-info"><a href="#" class="article-link">Feb 26, 2016</a> - <a href="#" class="article-link">12 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
               I think of modular design as a practice or a philosophy-with Atomic Design being just one way to do it. I've found that I'm able to benefit from Atomic Design concepts without always adopting its classification metaphor. A couple of... <a href="#">read more</a>
            </p>
         </div>

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2016/02/atomic-classification-thumb-296x196.png">
               <div class="title-info">
                  <p class="article-title">Device Agnostic</p>
                  <p class="article-info"><a href="#" class="article-link">March 10th, 2014</a> - <a href="#" class="article-link">43 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
               The more I build for the web, the more the term 'device-agnostic' endears itself to me. I used to think it merely dealt with basing responsive breakpoints on content rather than particular devices, but there's more to devices than... <a href="#">read more</a>
            </p>
         </div>

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2013/12/work-life-thumb.jpg">
               <div class="title-info">
                  <p class="article-title">Work Life</p>
                  <p class="article-info"><a href="#" class="article-link">Dec 11th, 2013</a> - <a href="#" class="article-link">53 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
               It probably won't surprise you to know that, though 90% of what I share online relates to my work, thinking about breakpoints, JS plugins, and fonts isn't all I do. I love my family. I like science fiction movies... <a href="#">read more</a>
            </p>
         </div>

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2013/08/hi-thumb.jpg">
               <div class="title-info">
                  <p class="article-title">Human Interest</p>
                  <p class="article-info"><a href="#" class="article-link">Aug 12th, 2013</a> - <a href="#" class="article-link">27 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
               Progressive enhancement has proven to be such a great strategy for the technical side of the web that I think we should take a similar approach for its personal side as well. Just as we assume the harshest conditions...<a href="#">read more</a>
            </p>
         </div>

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2013/04/reorganized.png">
               <div class="title-info">
                  <p class="article-title">Reorganization</p>
                  <p class="article-info"><a href="#" class="article-link">April 10th, 2013</a> - <a href="#" class="article-link">29 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
            Process is often shaped by how teams are organized. In the context of designing for the multi-device web, the high level of iteration and communication required to build a modern website is rendering the assembly line approach obsolete... <a href="#">read more</a>
         </div>

         <div class="article">
            <div class="article__head">
               <img class="article-image" src="http://pcdn.paravel.netdna-cdn.com/wp-content/uploads/2013/02/wts-thumb.png">
               <div class="title-info">
                  <p class="article-title">Where to Start</p>
                  <p class="article-info"><a href="#" class="article-link">
                  Feb 7th, 2013</a> - <a href="#" class="article-link">50 Responses</a></p>
               </div>
            </div>
            <p class="article__description">
            Process is often shaped by how teams are organized. In the context of designing for the multi-device web, the high level of iteration and communication required to build a modern website is rendering the assembly line approach obsolete... <a href="#">read more</a>
         </div>

      

         <a href="#" class="older-posts">Older Posts</a>
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
   </div>
</body>
</html>