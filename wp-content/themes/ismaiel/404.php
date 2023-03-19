<?php get_header(); ?>

<div class="container error-container">
<img class='error-404' src="<?php echo get_template_directory_uri();?>/imgs/error-404-img.jpeg" alt="">
    <div class="text-error"> 
        <h1>Page Not Found</h1>
        <a class='btn btn-green btn-rounded ' href="./index.php">TRY AGAIN</a><p></p>
    </div>
</div>


<?php get_footer(); ?>