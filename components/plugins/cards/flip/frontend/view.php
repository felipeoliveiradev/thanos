<style>
.face{
    justify-content: center;
}
</style>

<a href="<?php echo $page; ?>" style="color:#000">
<div id="card_plugin_container">
    <div id="card_plugin_card" class="shadow">
        <div class="front face">
            <div class="innerFrontContainerFlipCard">
                <div class="div">
                    <span class="<?php echo $icon ?>"></span>
                </div>
                <div class="div">
                    <?php echo $title; ?>
                </div>
            </div>
        </div>
        <div class="back face center">
            <div class="innerBackContainerFlipCard">
                <p><?php echo $text; ?></p>
            </div>
        </div>
    </div>
</div>
</a>