<?php get_header()?>

<?php

get_template_part('components/banners/banner-single-blog');

?>


                <div class="container search">
                    <div class="row">

                        <div class="col-sm-12 col-md-12">
                            <div class="row">
                                <div class="seach_term_title">
                                    <h4 class="search_title">
                                        Pesquisou por:
                                    </h4>

                                    <br/>
                                    <form method="GET" action="<?php echo esc_url(home_url('/')); ?>" class="form_model_search">
                                        <input type="text" name="s" class="input_text_search_page" placeholder="Oque deseja Pesquisar?" value=" <?php echo get_search_query(); ?>" />
                                        <input type="submit" class="input_submit_search hvr-grow" value="Pesquisar" />
                                    </form>

                                </div>

                                            <?php get_template_part('components/posts/Search/post_search');?>

        </div>
                        </div>

                    </div>
                </div>




<?php get_footer()?>