<div class='fixedCard' <?php echo $plugins->animation($typeAnimation, $duractionAnimate); ?>>
    <a href="<?php echo $link ?>" style="text-decoration:none">
        <div class='inner'>
            <div class='top'>
                <h1>
                    <?php echo $title ?>
                </h1>
            </div>
            <div class='bottom'></div>
            <div class='image'
                style='
                        background-image:url("<?php echo $image ?>");
                        background-size:<?php echo $imageWidth ?>rem <?php echo $imageHeight ?>rem;
                        background-position-x: <?php echo $imagePositionX ?>rem;
                        background-position-y: <?php echo $imagePositionY ?>rem;

                        '>
            </div>
        </div>
    </a>
</div>