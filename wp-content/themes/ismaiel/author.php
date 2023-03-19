<?php get_header () ?>
<div class="container author-page">            
    <h1 class="profile-header text-center">صفحة الكاتب (<?php the_author_meta('nickname') // Print Nick Name ?>)</h1>
    <div class="author-main-info">
 <!-- Start Row -->
    <div classe="row">
            <div classe="col-md-3">
                <?php
                    $avatar_arguments = array( // Avatar Arguments 
                        'class'=>'ing-responsive ing-thumbnail center-block');
                    // get avatar ('Id Or Email', 'Size', 'Default', 'Alternate Text', 'Image Arguments) 
                    echo get_avatar (get_the_author_meta('ID'), 196, '', 'User Avatar',$avatar_arguments);
                ?>
            </div>
        <div class="col-md-9">
            <ul class="list-unstyled">
                <Li>الإسم الأول : <?php the_author_meta('first name') // Print First Name ?></li>
                <li> الإسم الأخير : <?php the_author_meta('last name') // Print Last Name ?></li> 
                <li>لقب الكاتب : <?php the_author_meta('nickname') // Print Nick Name ?></li>
            </ul>
        <hr>
        <?php

                if (get_the_author_meta('description')) { // Check If User Have Biography ?> 
                    <p><?php the_author_meta('description') // Output The Biography ?></p>

                <?php

                } else { echo 'لا يوجد وصف للكاتب'; // Output Default Message T Theres No Bingaphy

                }
        ?>
    </div>
</div>
<!-- end row  -->
</div>
 <!-- start sec row s -->
    <div class="row author-stats">
        <div class="col-md-3">
            <div class="stats">
                عدد المقالات :
                <span><?php echo count_user_posts(get_the_author_meta('ID'))?></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats">
                عدد التعليقات :
                <span>
                    <?php 
                    $commentscount_arguments = array(
                        'user_id' => get_the_author_meta('ID'),
                        'count'   => true
                    );
                    echo get_comments($commentscount_arguments);
                    ?>

                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats">
                عدد المشاهدات :
                <span></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats">
                عدد اختبار :
                <span></span>
            </div>
        </div>

    </div>
    <div class="sub-title">
       <h2>مقالات الكاتب</h2>
    </div>
    <div class="container">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                
                    <div class="main-posts row">
                        <div class="col-sm-4">
                            <?php the_post_thumbnail('',['class' => 'img-responsive, img-thumbnail', 'title' => 'post image'])  ?>
                        </div>
                        <div class="col-sm-8">
                            
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
</div>
        </div>
<?php get_footer() ?>