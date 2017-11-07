<?php 
/*
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>

<div class="row">

    <div class="col-md-8">
        <?php if(have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_title('<h2>','</h2>'); ?>
            </div>
            <?php the_content() ?>
            <br>
            PAGES:
        <?php endif; ?>

        <?php 
            $list_pages = get_posts( 'post_type=page&exclude=2' );
            if($list_pages) :
        ?>
        <ul>
            <?php foreach($list_pages as $item) : //echo '<pre>';var_dump($item);exit; ; ?>
                <li>
                    <a href="<?php print get_permalink($item->ID) ?>" title="Open page <?php print $item->post_title ?>"> 
                        <?php print $item->post_title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php else : ?>

        <div class="alert alert-info">
            <strong>No content in this loop</strong>
        </div>

        <?php endif; ?>
    </div>

    <div class="col-md-4">

        <?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
		?>
            <?php
		     endif;
		?>
    </div>

</div>




<?php get_footer(); ?>