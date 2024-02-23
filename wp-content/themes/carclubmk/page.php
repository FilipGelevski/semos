<?php
 
get_header();
 
if( have_posts() ):
    while ( have_posts() ):
        the_post(); ?>
 
            <main class="main">
                <article id="<?php echo the_ID(); ?>">
                    <div class="container">
                        <div class="articel_title">
                            <?php the_title(); ?>
                        </div>
                        <div class="articel_content">
                            <?php the_content();?>
                        </div>
                    </div>
                </article>
            </main>
 
        <?php
    endwhile;
endif;
 
get_footer();