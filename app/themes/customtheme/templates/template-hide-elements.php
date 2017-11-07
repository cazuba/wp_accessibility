<?php 
/*
 * Template Name: HideElements
 */
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php the_title('<h2>','</h2>') ?>
    </div>

    <div class="col-md-5">
        <h3>Hide content <span class="text-danger">without</span> accessibility support:</h3>
        <p class="hide">Hi folks! I'm hide in the current page</p>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <p class="hide">Hi folks! I\'m hidden in the current page</p>')
            ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php the_title('<h2>','</h2>') ?>
    </div>

    <div class="col-md-5">
        <h3>Button inside anchor <span class="text-danger">without</span> accessibility support:</h3>
        <button type="reset">
            <a title="Go to examples website" href="http://www.example.com">Clic me</a>
        </button>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <button type="reset"><a title="Go to examples website" href="http://www.example.com">Clic me</a><button>')
            ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

<?php get_footer(); ?>