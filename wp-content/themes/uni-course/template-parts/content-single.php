<?php
/**
 *  Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Uni Course
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php if(has_post_thumbnail()) {?>
            <div class="meta-info-box">
                <span class="entry-view"><i class="fas fa-eye mr-2"></i> <?php echo esc_html(uni_course_gt_get_post_view()); ?></span>
                <span class="entry-time ml-3"><i class="fas fa-clock mr-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
                <span class="ml-3"><i class="fas fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'uni-course'), esc_attr('0', 'uni-course'), esc_attr('%', 'uni-course') ); ?> <?php esc_html_e('Comments','uni-course'); ?></span>
                <span class="ml-3"><i class="fas fa-calendar-alt mr-2"></i><?php echo esc_html(get_the_date()); ?></span>
            </div>
            <?php the_post_thumbnail(); ?>
        <?php }?>
    </header>
    <div class="entry-content">        
        <?php
        the_content(sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'uni-course'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            esc_html( get_the_title() )
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'uni-course'),
            'after' => '</div>',
        ));

        the_tags();
        ?>
    </div>
</article>