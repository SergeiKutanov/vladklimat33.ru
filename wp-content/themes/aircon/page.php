<?php get_header(); ?>

<?php
while(have_posts()): the_post();
?>
    <div class="row">
        <div class="small-12 columns">
            <h1><?php echo get_the_title();?></h1>
            <div class="row">
                <div class="small-12 columns">
                    <?php echo get_the_content();?>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
?>

<?php get_footer();?>