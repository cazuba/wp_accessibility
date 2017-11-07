<?php 
/*
 * Template Name: Headers
 */
?>
<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <?php the_title('<h2>','</h2>') ?>
    </div>

    <div class="col-md-5">
        <p>Headers <span class="text-danger">without</span> accessibility support:</p>
        <div class="h1">
            I'm H1 created by CSS
        </div>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <div class="h1">I\'m H1 created by CSS</div> ')
            ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <p>Headers <span class="text-danger">without</span> accessibility support:</p>
        <div class="h2">
            I'm H2 created by CSS
        </div>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <div class="h2">I\'m H2 created by CSS</div> ')
            ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <p>Headers <span class="text-danger">without</span> accessibility support:</p>
        <div class="h3">
            I'm H3 created by CSS
        </div>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <div class="h3">I\'m H3 created by CSS</div> ')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <p>Header <span class="text-success">with accessibility support</span>:</p>
        <h1>I'm H1 created with HTML tag &#60;h1&#62;</h1>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <h1>I\'m H1 created with HTML tag <h1></h1>')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <h2>I'm H2 created with HTML tag  &#60;h2&#62;</h2>
    </div>

    <div class="col-md-7">
        <h3>Code</h3>
        <div class="visual_code vs_small">
            <textarea class="lined"><?php 
                print htmlentities('   <h2>I\'m H2 created with HTML tag  <h2></h2>')
            ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php get_footer(); ?>