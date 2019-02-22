<?php get_header()?>

<?php

get_template_part('components/banners/banner-single');

?>
			<?php if (have_posts()): while (have_posts()): the_post();?>

				                    <?php the_content();?>

				                </div>
				            <?php endwhile;else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>
            <?php endif;?>

<?php get_footer()?>