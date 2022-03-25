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



<?php
get_footer();
?>