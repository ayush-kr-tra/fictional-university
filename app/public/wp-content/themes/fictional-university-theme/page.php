<?php  
    get_header();
?>
<h2>This is a page</h2>

<h1>
    <?php  the_title(); ?>
</h1>
<?php  
    the_content(); 
    get_footer();
?>
