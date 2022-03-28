<?php
get_header();

// this function is only used in custom taxonomy page 


$catdata= get_queried_object();



?>
  
<h3><?php echo $catdata->name; ?> :</h3>

<?php
$wpnews=array('post_type'=>'news','post_status'=>'publish','tax_query'=>array(['taxonomy'=>'news_catagory','field'=>'term_id',
'terms'=>$catdata->term_id]));


$newsquery=new Wp_Query($wpnews);
while($newsquery->have_posts()) {
  $newsquery->the_post();

  
  // get the imagepath//
  $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
  <div class="post-item">
  <a href="#"><img src="<?php echo $imagepath[0] ?>"/><h1><?php the_title(); ?></h1></a>
  <?php echo the_excerpt();?>
  <?php echo get_the_date(); ?>
  <?php echo get_the_time(); ?>
  <a href="<?php the_permalink();?>">
  <input type="button" value="Read More.."></a>
  </div>
  
  
  
  </div>






  </div>

  <?php } ?>




<?php get_footer();
?>