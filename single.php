<?php
get_header(); 
?>

<h1 ><?php
the_title(); 
?></h1>
<?php
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?><img src="<?php echo $imagepath[0] ?> " alt="postimg "width="100%" />
<?php the_content(); ?>
<?php comment_form(); ?>
<hr>
<?php
get_footer(); 
?>
