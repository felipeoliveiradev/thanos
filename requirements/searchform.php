<form method="GET" action="<?php echo esc_url(home_url('/')); ?>" class="form_model_search">
    <input type="text" name="s" class="input_text_search" placeholder="Oque deseja Pesquisar?" value="<?php the_search_query();?>" />
    <input type="submit" class="input_submit_search hvr-grow" value="Pesquisar" />
</form>
