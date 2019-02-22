<?php get_header()?>

<?php

get_template_part('components/banners/banner-single-blog');

?>
<div class="single_page_blog">
<style>
.topo{
	display:block;
}
</style>

            <?php if (have_posts()): while (have_posts()): the_post();?>
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-lg-9 left">
												        <div class="topo">
														<h1><?php the_title();?></h1><br/>
												        <?php the_author()?> | <?php the_time('d/M/Y')?> <?php edit_post_link('(Editar)');?>
												        </div>
														<?php the_content();?>
													</div>
													<div class="col-sm-12 col-lg-3 right">
														<?php get_sidebar('Sidebar 1');?>
													 </div>
												 </div>
											</div>
									 <?php endwhile;else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>
            <?php endif;?>
</div>
<?php get_footer()?>