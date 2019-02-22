<div class="imageComponentImage">
    <div class="inner">
        <div class="image" style='
        background-image:url(" <?php echo get_template_directory_uri(); ?>/public/image/components/plugins/ourStores/<?php echo $image ?>.webp");
        width:<?php echo $varImagem[0] ?>rem;
        height:<?php echo $varImagem[1] ?>rem;'
            <?php if ($animation=='yes' ) {$plugins->animation($result[4],
            $result[5]);
            } else {}?>>

        </div>
    </div>
</div>