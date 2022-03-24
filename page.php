<?php
get_header();
the_post();
?>

<div class="about-content">
<h2><?php the_title(); ?>:</h2>
<?php the_post_thumbnail('thumbnail'); ?>
<?php
echo get_the_content();

?>
<?php $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail') ?>
<img src="<?php echo $imagepath[0] ?>" alt="">
</div>

<?php
get_footer();
?>