<?php
get_header();
?>
<div class="post">
<?php
while(have_posts()){

the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
?>
<div class="post-item col-md-3">
<a href="#"><img src="<?php echo $imagepath[0] ?>"/><h1><?php the_title(); ?></h1></a>
<?php echo the_excerpt();?>
<?php echo get_the_date(); ?>
<?php echo get_the_time(); ?>
<a href="<?php the_permalink();?>"><input type="button" value="Read More.."></a>
</div>

<?php } ?> 

</div>
<?php echo wp_pagenavi() ?>












<?php
get_footer();
?>