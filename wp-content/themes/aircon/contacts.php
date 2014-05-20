<?php
/**
Template Name: Контакты
 */
?>
<?php get_header();?>
<div class="row">
    <div class="small-12 columns">
        <h1>Контактная информация</h1>
        <div class="row">
            <div class="small-12 columns">
            <?php
                while(have_posts()): the_post();
                    echo the_content();
                endwhile;
            ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>