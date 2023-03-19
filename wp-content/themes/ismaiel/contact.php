<?php /* Template Name:تواصل معنا*/ ?> 

<?php get_header(); ?>
<div class="the-bosts">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <h1 clss="who-are-we"><?php the_field('تواصل-معنا-عنوان'); ?></h1>
                
                <div class="main-posts single-post">
                    
                    <p><?php the_field('فيسبوك'); ?></p>
                </div>        
            </div>
            <div class="col-sm-3">
                <?php 
                    if (is_active_sidebar('main-sidebar')){
                        dynamic_sidebar('main-sidebar');
                    }
                ?>
            </div>

        </div> 
    </div>
</div>

</body>
    
<?php get_footer(); ?>