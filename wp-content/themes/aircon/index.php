<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 5/17/14
 * Time: 4:50 PM
 */
get_header();
?>

<?php
if(is_home()){
    get_template_part('featured');
?>
<div class="row">
    <hr>
</div>
<?php
    $args = array(
        'category_name'     => 'титульная-статья',
        'show_posts'        => 1
    );
    $query = new WP_Query($args);
    if($query->have_posts()):
?>
<div class="row">
    <div class="small-12 columns">
        <?php
        while($query->have_posts()):
            $query->the_post();
        ?>
        <div class="title-article-title"><h2><?php echo the_title(); ?></h2></div>
        <div class="title-article-content"><?php the_content(); ?></div>
    </div>
<?php endwhile; ?>
</div>
<?php  endif;
}
?>

<?php get_footer(); ?>