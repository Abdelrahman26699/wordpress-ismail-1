<?php

    if(comments_open()) {

        echo '<h3 class="comment-hash">', comments_number() ,'</h3>';

        echo '<ul class="list_unsyled comments-list">';

        $comments_arguments = array(

        'max_deapth' => 3,
        'type'       => 'comment',
        'avatar_size'=>  64  
        );
        wp_list_comments($comments_arguments);

        echo '</ul>';

        echo '<hr class="comment-separator">';

        $comment_form_argument = array (

            'title_reply'         => 'أضف تعليقك',
            'title_reply_to'       => 'أضف ردك على[%s]',
            'comment_notes_before' => '',
           

        );

        comment_form($comment_form_argument);
    }
    else{
        echo'<h3 class="comment-hash"> نأسف التعليقات غير متوفرة على هذا المقال</h3>';
    }
?>    