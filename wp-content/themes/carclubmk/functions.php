<?php 

require_once 'core/after-setup-theme.php';

// funkcija za godini na 2 


function isOlder ($age1,$age2)
{
    $isTrue = false; 
    if($age1 > $age2){
        $isTrue = true;
    }; 
    return $isTrue;
};

add_filter ('the_title', 'change_single_title', 10 , 2);

function change_single_title ($post_title, $post_id){
    if(is_single()&& !is_admin()){
        return 'Title:' . $post_title;
    }   
};

add_filter( 'the_content', 'change_single_content', 10, 1 );
function change_single_content( $content ) {
    return $content . '<p>This is content</p>';
}