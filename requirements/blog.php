<?php /* Template Name: Blog */?>


<?php get_header()?>

<?php

    get_template_part('template_parts/banners/banner-single');

?>


                <div class="container category">
                    <div class="row">

                        <div class="col-sm-12 col-md-9">
                            <div class="row">

                                            <?php get_template_part('template_parts/posts/post');?>

        </div>
                        </div>
                        <div class="col-sm-12 col-md-3 right">
                                <?php get_sidebar('Sidebar 1');?>
                        </div>
                    </div>
                </div>




<?php get_footer()?>