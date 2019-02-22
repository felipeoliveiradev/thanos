<section class="ourPatterns">
    <?php
$plugins = new Plugin();
new Title('EXPERTISE', 'NOSSOS PARCEIROS');

?>
    <div class="container">
        <div class="row">
            <div class="slider centerGallery" <?php $plugins->animation();?>>

                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/conac.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/asa.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/embraced.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/freespritit.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/abmobara.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/hotelurbano.webp"
                            alt="" <?php $plugins->animation('flip-left', '800');?>>
                    </picture>
                </div>
                <div>
                    <picture>
                        <img class="" src="<?php echo get_template_directory_uri() ?>/public/image/components/clients/prix.webp"
                            alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>