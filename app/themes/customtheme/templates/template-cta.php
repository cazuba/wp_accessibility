<?php 
/*
 * Template Name: Anchors
 */
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php the_title('<h2>','</h2>') ?>
    </div>

    <div class="col-md-5">
        <h3>Link <span class="text-danger">without</span> title support:</h3>
        <?php 
            // LINK SIN TITLE
            $cta_text   = get_field('link_wrong_text');
            $cta_url    = get_field('link_wrong_url');
            $cta_target = get_field('link_wrong_target');
        ?>
        <a href="<?php print $cta_url ?>" target="<?php print $cta_target ?>">
            <?php print $cta_text ?>
        </a>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code">
            <textarea class="lined"><?php 
                print htmlentities(
                    '   <?php ' . "\n" .
                    '      // LINK SIN TITLE' . "\n" .
                    '      $cta_text   = get_field(\'link_wrong_text\');' . "\n" .
                    '      $cta_url    = get_field(\'link_wrong_url\');' . "\n" .
                    '      $cta_target = get_field(\'link_wrong_target\');' . "\n" .
                    '   ?>' . "\n" .
                    '   <a href="<?php print $cta_url ?>" target="<?php print $cta_target ?>"><?php print $cta_text ?></a>')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <h3>Other Links with <span class="text-danger">wrong</span> title support:</h3>
        <?php 
            // LINK SIN TITLE
            $cta_text   = get_field('link_wrong_text');
            $cta_url    = get_field('link_wrong_url');
            $cta_target = get_field('link_wrong_target');
        ?>
        <span class="text-danger">Clic Here</span> ->
        <a href="<?php print $cta_url ?>" title="Clic here" target="<?php print $cta_target ?>">
            <?php print $cta_text ?>
        </a>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <a href="<?php print $cta_url ?>" title="Clic here" target="<?php print $cta_target ?>"><?php print $cta_text ?></a>')
            ?></textarea>
        </div>
        <br>
        <span class="text-danger">More</span> ->
        <a href="<?php print $cta_url ?>" title="More" target="<?php print $cta_target ?>">
            <?php print $cta_text ?>
        </a>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <a href="<?php print $cta_url ?>" title="More" target="<?php print $cta_target ?>"><?php print $cta_text ?></a>')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <h3>Link <span class="text-success">with</span> title support:</h3>
        <?php 
            // LINK SIN TITLE
            $cta_text   = get_field('link_text');
            $cta_url    = get_field('link_url');
            $cta_target = get_field('link_target');
            $cta_title  = get_field('link_title');
        ?>
        <a href="<?php print $cta_url ?>" title="<?php print $cta_title ?>" target="<?php print $cta_target ?>">
            <?php print $cta_text ?>
        </a>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code">
            <textarea class="lined"><?php 
                print htmlentities(
                    '   <?php ' . "\n" .
                    '      // LINK SIN TITLE' . "\n" .
                    '      $cta_text   = get_field(\'link_wrong_text\');' . "\n" .
                    '      $cta_url    = get_field(\'link_wrong_url\');' . "\n" .
                    '      $cta_target = get_field(\'link_wrong_target\');' . "\n" .
                    '   ?>' . "\n" .
                    '   <a href="<?php print $cta_url ?>" title="<?php print $cta_title ?>" target="<?php print $cta_target ?>"><?php print $cta_text ?></a>')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php get_footer(); ?>