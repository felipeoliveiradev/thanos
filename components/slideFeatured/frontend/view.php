<section class="slideFeatured">

    <?php  
    
    $argsSlider = array(
        'post_type' => 'gallery_slide',
        'posts_per_page' => -1,
    );
    $loopSlider = new WP_Query($argsSlider);
    $slide_meta_data = get_post_meta( $loopSlider->ID ); 
    if ($loopSlider->have_posts()): while ($loopSlider->have_posts()): $loopSlider->the_post();
    global $post;
    $metaSlider = get_post_meta( $post->ID, 'gallery_slide_data', true );

    ?>
    <div style="background-image: url('<?php
if (has_post_thumbnail()) {
    echo get_the_post_thumbnail_url($loopSlider->ID, 'full');
}
?>')"
        class="slide-single">
        <div class="h1container">
            <h1><?php echo $metaSlider['title'];  ?></h1>
        </div>
        <div class="h3container">
            <h3><?php echo $metaSlider['subtitle'];   ?></h3>
        </div>
        <?php if(!empty($metaSlider['btn_name'])){ ?>
        <div class="acontainer">
            <a href="" class="btn btn-slide"><?php echo $metaSlider['btn_name'] ?></a>
        </div>
        <?php } else{} ?>


    </div>
    <?php  endwhile;endif;  ?>
</section>

<div class="bullets">

</div>