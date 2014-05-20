<?php get_header();?>
<div class="row">
    <article id="aircon-article">
        <div class="small-12 columns">
<?php while(have_posts()) : the_post();?>
            <h1><?php echo get_the_title();?></h1>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
                <div class="small-12 medium-6 columns">
                    <div class="item-price">
                        <h3>Цена</h3>
                        <span class="item-price"><?php echo get_post_custom_values('Цена')[0];?></span>
                        <a class="button radius" href="<?php echo get_contacts_page_link();?>">Купить</a>
                    </div>
                </div>
            </div>
            <h2>Описание</h2>
            <?php the_content();?>
<?php endwhile;?>
        </div>
    </article>
</div>
<?php get_footer();?>