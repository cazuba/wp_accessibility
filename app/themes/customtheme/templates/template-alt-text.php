<?php 
/*
 * Template Name: Alt Text 
 */
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php the_title('<h2>','</h2>') ?>
    </div>

    <div class="col-md-5">
        <h3>Image <span class="text-danger">without</span> alt support:</h3>
        <?php 
            // IMAGEN CON ALT SUPPORT
            $image = get_field('gallery_img_not_supported');
        ?>
        <img src="<?php print $image ?>" />
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code">
            <textarea class="lined"><?php 
                print htmlentities(
                    '   <?php ' . "\n" . 
                    '       // IMAGEN CON ALT SUPPORT' . "\n" .
                    '       $image_url = get_field(\'gallery_img_not_supported\');' . "\n" .
                    '   ?>' . "\n" . 
                    '   <img src="<?php print $image_url ?>" alt="<?php print $image[\'alt\'] ?>"/>') 
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">

    <div class="col-md-5">
        <h3>Image Object <span class="text-danger">without</span> alt support:</h3>
        <?php 
            // IMAGEN CON ALT SUPPORT
            $image = get_field('gallery_img_obj_not_supported');
        ?>
        <img src="<?php print $image['url'] ?>" />
    </div>
    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code">
            <textarea class="lined"><?php 
                print htmlentities(
                    '   <?php ' . "\n" . 
                    '       // IMAGEN CON ALT SUPPORT' . "\n" .
                    '       $image = get_field(\'gallery_img_obj_not_supported\');' . "\n" .
                    '   ?>' . "\n" . 
                    '   <img src="<?php print $image[\'url\'] ?>" alt="<?php print $image[\'alt\'] ?>"/>') 
            ?></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1>
            <?php the_title() ?>
        </h1>
    </div>
    <div class="col-md-5">
        <h3>Image <span class="text-success">with</span> alt support:</h3>
        <?php 
            // IMAGEN CON ALT SUPPORT
            $image = get_field('gallery_img_supported');
        ?>
        <img src="<?php print $image['url'] ?>" alt="<?php print $image['alt'] ?>" title="<?php print $image['title'] ?>" />
    </div>
    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code">
            <textarea class="lined"><?php 
                print htmlentities(
                    '   <?php ' . "\n" . 
                    '       // IMAGEN CON ALT SUPPORT' . "\n" .
                    '       $image = get_field(\'gallery_img_supported\');' . "\n" .
                    '   ?>' . "\n" . 
                    '   <img src="<?php print $image[\'url\'] ?>" alt="<?php print $image[\'alt\'] ?>" title="<?php print $image[\'title\'] ?>"/>') 
            ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php get_footer(); ?>