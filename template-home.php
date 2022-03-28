<?php
//Template Name:Home

get_header();
$cat=get_categories(array('taxonomy'=>'category')); 

?>




<div class="post">


<div class="post-item ">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/breakfast.avif" alt="bf"><h1>Breakfast</h1></a>
</div>

<div class="post-item ">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/lunch.avif" alt="lunch"><h1>Lunch</h1></a>
</div>

<div class="post-item ">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/snack.jpg" alt="lunch"><h1>snack</h1></a>
</div>

<div class="post-item ">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/dinner.avif" alt="lunch"><h1>Dinner</h1></a>
</div>


</div>




<div class="lowerpart ">
  <h2>ORder NOW:</h2>
  <?php
  
foreach($cat as $catvalue){

?>
  <div class="lowerpart-item">

    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo">
    <a href="<?php echo get_category_link($catvalue->term_id); ?>"><?php echo $catvalue->name;  ?>
  (<?php echo $catvalue->count;  ?>)</a>

</div>
  <?php } ?> 

</div>
<hr>
<h2>Latest News</h2>
<div class="lowerppost">
  <?php
$wpnews=array('post_type'=>'news','post_status'=>'publish');


$newsquery=new Wp_Query($wpnews);
while($newsquery->have_posts()) {
  $newsquery->the_post();


  // get the imagepath
  $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
  
<div class="box">
<img src="<?php echo $imagepath[0] ?>"/>
<h3><?php the_title(); ?></h3>
<?php echo get_the_date() ?><br>
<button><?php the_title(); ?></button>
</div>
<?php } ?>
</div>





<h3>latest News Catagory</h3>
<?php
$newscat=get_terms(['taxonomy'=>'news_catagory','hide_empty'=>false]);

foreach($newscat as $newscatdata) {

?>
<div class="news">
<img src="<?php bloginfo('template_directory'); ?>/images/c.jpg" alt=""><a href="#"><?php  echo  $newscatdata->name ?></a>


</div>
<?php } ?>
<?php
get_footer();
?>