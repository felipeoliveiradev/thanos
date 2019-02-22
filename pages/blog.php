<?php
/*
Template Name: Blog
Template Post Type: page
 */
?>


<?php get_header()?>

<?php
$plugins = new Plugin();
$banner = new Banner();
$banner->principal('', 'BLOG');
?>

<section class="blogPage">
    <div class="container">
        <div class="row linha">

            <div class="col-sm-12 col-md-6 left">
                <a href="http://temporariomirage.cpanel.srv.br/post1/" style="width: 100%;">
                    <div class="banner">
                        <div class="img">
                            <h1>Titulo</h1>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-12 col-md-6 right">
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
                
            if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post();?>
            <div class="col-sm-12 col-lg-4 block">
                <a href="<?php the_permalink() ?>" style="width: 100%;">
                    <div class="innerblock" style="background:url(<?php the_post_thumbnail('full');?>)">
                        <h1><?php the_title()?></h1>
                        <div class="innerLogo">
                        </div>
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
"><a href="" class="btn">VER MAIS</a>
            </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer()?>