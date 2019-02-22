<?php /* Template Name: Category */?>


<?php get_header()?>

<?php

get_template_part('components/banners/banner-single-blog');

?>


                <div class="container category">
                    <div class="row">

                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                            <h1><?php the_archive_title();?></h1>

                                            <?php get_template_part('components/posts/post');?>

        </div>
                        </div>
                        <div class="col-sm-12 col-md-3 right">
                                <?php get_sidebar('Sidebar 1');?>
                        </div>
                    </div>
                </div>




<?php get_footer()?>