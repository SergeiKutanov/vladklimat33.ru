<?php
/**
 Template Name: Прайс-Лист
 */
get_header();
?>
<div class="row" data-equalizer>
    <div class="medium-3 columns" data-equalizer-watch>
        <span id="left-arrow"><div class="ball"></div></span>
    </div>
    <div class="medium-6 columns" data-equalizer-watch>
        <h2 class="main-heading"></span>Прайс лист</h2>
    </div>
    <div class="medium-3 columns" data-equalizer-watch>
        <span id="right-arrow"><div class="ball"></div></span>
    </div>
</div>

<?php
$categories = array(
    'dantex',
    'ballu',
    'electrolux'
);
foreach($categories as $category):
?>
<div class="row" id="featured_posts" class="<?php echo $category;?>" data-equalizer>
    <div class="small-12 columns">
        <img class="aircon-label" alt="Купить кондиционеры <?php echo get_category_by_slug($category)->name;?>" src="<?php bloginfo('template_url'); ?>/img/<?php echo $category;?>.png"/>
    </div>
    <?php
    $query = new WP_Query("post_type=conditioner&category_name=$category&orderby=menu_order&order=ASC");
    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            ?>
            <div class="medium-3 columns item-block" data-equalizer-watch>
                <a href="<?php echo esc_url(get_permalink(get_the_ID()));?>">
                    <div class="item-wrap">
                        <div class="item-thumb"><?php echo get_the_post_thumbnail();?></div>
                        <div class="item-title"><h3><?php echo get_the_title();?></h3></div>
                        <div class="item-desc"><?php echo get_the_excerpt();?></div>
                        <div class="item-price">
                            <h3>Цена</h3>
                            <span class="item-price"><?php echo get_post_custom_values('Цена')[0];?></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php }?>
    <?php }
    wp_reset_postdata();
    ?>
</div>
<div class="row">
    <hr>
</div>
<?php endforeach;?>

<?php get_footer();?>
