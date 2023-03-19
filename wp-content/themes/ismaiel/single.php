<?php get_header(); ?>
<br><br>
<div class="the-bosts">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php 
                if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    
                    <div class="main-posts single-post" data-aos="fade-left" data-aos-duration="2000">
                        <?php edit_post_link('تعديل <i class="fas fa-edit"></i>') ?>
                            <h1 clss="post-title"> 
                                <a href="<?php the_permalink() ?>"><?php  the_title( ) ?></a>
                                
                            </h1>
                        <div class="details">
                            <span class="post-date"> <?php the_time('F j, Y') ?> <i class="fa fa-calendar fa-fw"></i>  </Span>
                            <span class="post-comments"> <?php comments_popup_link() ?><i class="fa fa-comment-o fa-fw"></i>   </Span>
                        </div>
                        <?php the_post_thumbnail('',['class' => 'img-responsive, img-thumbnail', 'title' => 'post image'])  ?>
                        <div class="post-content"> 
                        <!-- <?php the_content( 'Read More ...') ?> عدد الحروف اللي انت تحددها في الصفحة من المور -->
                            <?PHP the_content() ?> <!--  تتجاهل الصور و تجيب لك 55 كلمه بس و يمكن انك تزود العدد و تغير في المقتطفات اللي انت عاوزه -->
                        </div>
                        <hr>
                        <p class="category">
                        <i class="fa fa-tags fa-fw"> </i> 
                        <?php the_category( ' , ') ?></p>
                        <?php
                            //
                            // Post Content here
                            //
                            }        // end while
                            } // end if
                        ?>
                    </div>
            </div>
                <div class="col-sm-3" data-aos="fade-right" data-aos-duration="3000">
                    <?php 
                    if (is_active_sidebar('main-sidebar')){
                        dynamic_sidebar('main-sidebar');
                    }
                ?>
            </div>

        </div> 
        <div class="author-part-2 col-sm-9" data-aos="fade-left" data-aos-duration="2000">
                <div class="author row ">
                    <div class="col-md-2">
                    <?php 
                        $avatar_arguments = array(
                            'class'  =>  'img-responsive img-thumbnail center-block'
                        );
                        echo get_avatar(get_the_author_meta('ID'), 128 , '','User Avatar', $avatar_arguments);
                    ?>
                </div>
                <div class="col-md-10 author-info">
                   <h4 >
                        <?php the_author_meta('frist_name') ?> 
                        <?php the_author_meta('last_name') ?> 
                        <?php the_author_meta('nickname') ?> 

                    </h4> 
                    <p>
                        <?php
                        if (get_the_author_meta('description')){ ?> 
                        
                            <?php the_author_meta('description') ?>  
                            <?php } else {
                                echo 'لا يوجد وصف للكاتب';
                            }
                        ?>
                    </p>
                </div> 
                 
            </div> 
            <hr>
            
            <p class="author-stats">
                عدد مقالات الكاتب : <span class="posts_count"><?php echo count_user_posts(get_the_author_meta('ID')) ?> </span>
            </p>
            <p>
               صفحة الكاتب : <?php the_author_posts_link() ?> 
            </p> 
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
        
        //   echo 'hr class="commaent-separator"';
          comments_template();

          
    ?>   

    </div>      
    
</div>
                </body>
    
<?php get_footer(); ?>
