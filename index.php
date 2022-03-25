<?php get_header(); ?>

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
</div>
<?php } ?> 

</div>
<?php echo wp_pagenavi() ?>

<?php get_footer();
?>
  
  
 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>