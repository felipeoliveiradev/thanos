<?php get_header()?>

<?php
$plugins = new Plugin();
$banner = new Banner();
$banner->blog('', 'BLOG');
?>

<section class="blogPage">
    <div class="container">
        <div class="row linha">

            <div class="col-sm-12 col-md-6 left">
                <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '1'
            );
                
            $query = new WP_query ( $args );
            if ( $query->have_posts() ) { ?>

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <a href="<?php the_permalink() ?>" style="width:100%;">
                    <div class=" banner">
                        <div class="img" style="background:url(<?php the_post_thumbnail_url(); ?>)">
                            <h1><?php the_title() ?></h1>

                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php } ?>
            </div>


            <div class="
                            col-sm-12 col-md-6 right">
                <div class="target">
                    <div class="innerBlogTarget">
                        <h1>CATEGORIAS</h1>
                        <select name="select">
                            <option value="valor1">Valor 1</option>
                            <option value="valor2" selected>Valor 2</option>
                            <option value="valor3">Valor 3</option>
                        </select>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <?php new Title("", 'ULTIMAS NOTICIAS');?>
    <div class="container">
        <div class="row linha2">
            <?php
            query_posts('posts_per_page=6&offset=-1');
            if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post();?>
            <div class="col-sm-12 col-lg-4 block">
                <a href="<?php the_permalink() ?>" style="width: 100%;">

                    <div class="innerblock" style="background:url(<?php the_post_thumbnail_url()?>)">
                        <h1><?php the_title()?></h1>

                    </div>
                </a>
            </div>
            <?php endwhile?>
            <?php endif?>
            <div class="" width="
                            100%"
                style="width: 100%;
    text-align: center;
    margin: 3rem;
"><a href="" class="btn">VER
                    MAIS</a>
            </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer()?>