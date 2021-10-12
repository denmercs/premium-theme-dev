<?php 
    get_header(); 
?>
<?php 
    if(have_posts()): 
        while(have_posts()): the_post();
?>
            <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(  ); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div>
                <?php _themename_post_meta() ?>
            </div>
            <div>
                <?php the_excerpt(  ); ?>
            </div>
            <?php _themename_readmore_link(); ?>
            
<?php
        endwhile;
        the_posts_pagination(  );
    else:
?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'premiumtheme') ?></p>
<?php
    endif;
?>
<?php 
    get_footer(); 
?>

