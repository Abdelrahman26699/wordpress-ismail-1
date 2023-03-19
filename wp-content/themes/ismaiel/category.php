<?php /* Template Name: Home */ ?> 

<?php get_header(); ?>
<br>
<br><br>
<div class="cat-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1><?php single_cat_title() ?></h1>
            </div>
            <div class="col-sm-6">
                <p><?php echo category_description() ?></p>
            </div>    
        </div>
    </div>
</div>
<br><br><br>
<div class="the-bosts">
<div class="container">
   <div class="row">
        <div class="col-sm-9">
         <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    
                        <div class="main-posts row">
                            <div class="col-sm-4">
                                <?php the_post_thumbnail('',['class' => 'img-responsive, img-thumbnail', 'title' => 'post image'])  ?>
                            </div>
                            <div class="col-sm-8">
                                
                                    <span class="post-author"> <?php the_author_posts_link() ?><i class="fa fa-user fa-fw"></i>  </Span>
                                    <span class="post-date"><?php the_time('F j, Y') ?>  <i class="fa fa-calendar fa-fw"></i>  </Span>
                                    <span class="post-comments"><?php comments_popup_link() ?> <i class="fa fa-comment-o fa-fw"></i></Span>
                                
                                <h3 clss="post-title"> 
                                <a class="title" href="<?php the_permalink() ?>">
                                <?php  the_title( ) ?>
                                </h3>
                                
                                <div class="post-content"> 
                            <!--<?php the_content( 'Read More ...') ?> عدد الحروف اللي انت تحددها في الصفحة من المور -->
                                <?PHP the_excerpt( $post) ?> </div><!--  تتجاهل الصور و تجيب لك 55 كلمه بس و يمكن انك تزود العدد و تغير في المقتطفات اللي انت عاوزه -->
                               <div class="row bost-foot">
                            <!-- <p class="category col-sm-4">
                            <i class="fa fa-tags fa-fw"> </i> 
                            <?php  the_category( ' , ') ?></p> 
                            <p class='post-tags col-sm-4 '>
                                 <?php
                                    if (has_tag()){
                                    the_tags() ;
                                  }else {
                                    echo 'tags: there\'s No Tags';
                                  }
                                  ?> -->
                                  </p><a class="btn btn-bost col-sm-5" href='<?php the_permalink() ?>' rel="nofollow">أكمل القراءة</a>
                                </div>
                            </div>
                           
                            
                
                           
                            
                                

                   
                        </div>           
                    
                    <?php
                        //
                        // Post Content here
                        //
                        }        // end while
                        } // end if
                        
                        
                    ?>
        </div>
        <div class="col-sm-3">
            <?php 
            if (is_active_sidebar('main-sidebar')){
                dynamic_sidebar('main-sidebar');
            }
            ?>
            
        </div>

        <hr>
    </div>
   
</div>
</div>
</div>

<div class="container">
    <?php 
        echo'<div class="clearfix"></div>';
            echo '<div class=post-pagination >';
            if( get_previous_posts_link() ) {
                    previous_posts_link('<i class="fa fa-chevron-left" aria-hidden="true"></i>
                    Prev');}
                    else{ 
                        echo '<span class="btn prev "> <i class="fa fa-chevron-right" aria-hidden="true"></i> السابق </span>';
                    }
            if( get_next_posts_link() ) {
                    next_posts_link('Next <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    ');}
                        else{ 
                        echo '<span class="next btn">التالي <i class="fa fa-chevron-left" aria-hidden="true"></i></span>';
                        } 
            echo '</div>';              
    ?>   
</div>
</body>



       
   
    <?php get_footer(); ?>
