
<?php get_header(); ?>
<div class="landing">
    
        <div class="row">
            <div class="col-sm-5 right-land">
                <h1 data-aos="fade-down" data-aos-duration="3000" > زود معرفتك</h1>
                <h3 data-aos="zoom-in-up" data-aos-duration="2000">زود معرفتك الطبية و العلمية مع نخبة من أفضل الأطباء و الصيادلة المتخصصين في كافة المجالات العلمية  </h3>
                <a href="./من-نحن" class="btn btn-green btn-rounded " data-aos="zoom-out-right" data-aos-duration="2000">تعرف على المزيد </a>             
            </div>
            
            <div class="col-sm-7 left-land">
                <img  class='landing-img' src="<?php echo get_template_directory_uri(); ?>/assets/images/landing-img.png" alt="recite Quran" title="recite quran">
                <div class="curve"></div>
            </div>
        </div>
   
</div>
<div class="land-bott">
    <h3>
        تواصل معنا
        <a href=""><i class="fab fa-facebook"></i></a>
        <a href=""><i class="fab fa-whatsapp"></i></i></a>
        <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href=""><i class="fab fa-telegram" aria-hidden="true"></i></a>
    </h3>
</div>
<div class="sub-title container"><h2>آخر المواضيع</h2></div>
<div class="the-bosts">
<div class="container">
   <div class="row">
        <div class="col-sm-9" >
         <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    
                        <div class="main-posts row" data-aos="fade-left" data-aos-duration="2000">
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
                                <?PHP the_excerpt( 20) ?> </div><!--  تتجاهل الصور و تجيب لك 55 كلمه بس و يمكن انك تزود العدد و تغير في المقتطفات اللي انت عاوزه -->
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
        <div class="col-sm-3" data-aos="fade-right" data-aos-duration="3000">
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
<div class="sub-title container">
    <h2 id="features"> أهم المواضيع</h2>
</div>

<div class="container"> 
    <div class="swiper">
        <div class="swiper-wrapper">
                <div class="swiper-slide" data-aos="flip-right" data-aos-duration="2000" >
                    <div class="how-it ">
                        <div class="rivew"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ibn-fares.jpeg" alt="Fill in the form">
                            <h3 class="title">قال ابن فارس في الصاحبي</h3>
                            <p>إن لعلم العرب أصلا و فرعا : أما الفرع فمعرفة الأسماء والصفات كقولنا : “رجل” و فرس و طويل و قصير . وهذا الذي يبدأ به عند التعلم  أما الأصل فالقول على موضوع اللغة وأولياتها  ومنشأها , </p>
                            <a class="btn btn-bost col-sm-5" href='http://localhost/wordpress/2023/03/19/قال-ابن-فارس-في-الصاحبي/' rel="nofollow">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide" data-aos="flip-left" data-aos-duration="2000">
                <div class="how-it ">
                    <div class="rivew"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/zeraa.jpeg" alt="Set a sechedule">    
                        <h3 class="title">مدرسة الزراعة</h3>
                        <p> أولا : الدرسخانة الملكية(1830م – 1245هـ) 

تعد المدرسة أولى محاولات محمد علي لوضع الزراعة في مصر على أسس علمية حديثة.
كان الطلاب يتعلمون الإنشاء و العربية و الفارسية .</p>
                        <a class="btn btn-bost col-sm-5" href='http://localhost/wordpress/2023/03/19/مدرسة-الزراعة/' rel="nofollow">قراءة المزيد</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-aos="flip-right" data-aos-duration="2000">
                <div class="how-it ">
                    <div class="rivew">  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chemistry.jpeg" alt="Enjoy the classes">   
                    <h3 class="title">نبذه في تاريخ علم الكيمياء </h3> 
                        <p>إن من أصعب الأمور الوقوف على مبدء علم الكيمياء و تاريخ نشأتها كما في بقية العلوم النفيسة القديمة , غير أنه يؤخذ من بعض الكتب القديمة نسبته لقارون الذي كان من قوم موسى عليه السلام</p>
                        <a class="btn btn-bost col-sm-5" href='http://localhost/wordpress/2023/03/19/نبذة-في-تاريخ-علم-الكيمياء/' rel="nofollow">قراءة المزيد</a>
                    </div>
                </div>
            </div>
        </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
    </div>
</div>
<div class="container">
    <?php 
        echo'<div class="clearfix"></div>';
            echo '<div class=post-pagination >';
            if( get_previous_posts_link() ) {
                    previous_posts_link('<i class="fa fa-chevron-left" aria-hidden="true"></i>السابق');}
                    else{ 
                        echo '<span class="btn prev "> <i class="fa fa-chevron-right" aria-hidden="true"></i> السابق </span>';
                    }
            if( get_next_posts_link() ) {
                    next_posts_link(' 
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>التالي');}
                        else{ 
                        echo '<span> <i class="fa fa-chevron-right" aria-hidden="true"></i>التالي</span>';
                        } 
            echo '</div>';  
            
    ?>   
    <br>
</div>
</body>



       
   
    <?php get_footer(); ?>
