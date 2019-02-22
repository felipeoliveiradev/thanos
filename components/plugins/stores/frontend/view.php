<div class="componentOurStores">
    <h1>
        <?php echo $title ?> &nbsp;
        <span>.</span>&nbsp;
        <?php echo $subtitle ?>
    </h1>
    <div class="inner">
        <?php        
        $images->line($result[4], $result[5],  $result[6], $result[7],  $result[8], $result[5], $result[7], $result[8]) ?>
        <h3>
            <?php echo $text; ?>
        </h3>
    </div>
</div>