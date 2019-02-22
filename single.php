<?php
/*
Template Name: Blog Single Post
Template Post Type: post
 */
?>



<?php get_header()?>

<?php
if (have_posts()): while (have_posts()): the_post();
        $plugins = new Plugin();
        $banner = new Banner();
        $product = new Product();

    

        ?>

<section class="blogPageSingle">
    <div class="container">
        <div class="row linha">
            <div class="col-sm-12 col-lg-8 theContent">

                <div class="artigo">
                    <img src="<?php the_post_thumbnail_url();?>" class="imgPostContent" />
                    <h1><a href="<?php the_permalink()?>" class="linka"><?php the_title() ?></a></h1>
                    <hr />
                    <p><?php the_content();?></p>
                </div>
                <?php endwhile;else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>
                <?php endif;?>

            </div>
            <div class="col-sm-12 col-lg-4 sidebar">
                <div class="innersidebar">
                    <ul>
                        <li>
                            <input type="text" class="searchInput" placeholder="Buscar">
                        </li>
                        <li>
                            <h2>CATEGORIAS</h2>
                            <hr />
                            <ul>
                                <li><a href="" class="active">Artigo</a></li>
                                <li><a href="">Cadeira</a></li>
                                <li><a href="">Decoração</a></li>
                                <li><a href="">Ergonomia</a></li>
                                <li><a href="">História</a></li>
                                <li><a href="">Materiais</a></li>
                                <li><a href="">Moveis</a></li>
                                <li><a href="">Noticiais</a></li>
                                <li><a href="">Uncategorized</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>NEWSLETTER</h2>
                            <hr />
                            <input type="text" class="searchInput" placeholder="E-mail">
                            <div class="btnContainer">
                                <input type="submit" class="btn" value="Enviar">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer()?>