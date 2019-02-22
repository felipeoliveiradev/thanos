<div class="col-sm-12 col-md-4">
    <div class="productPrincipal">
        <div class="image">


            <picture>
                <?php the_post_thumbnail();?>
            </picture>

        </div>
        <div class="textMoreArrow">

            <div class="texts">
                <div class="innerTexts">
                    <h1><?php the_title();?><br /><span>COD:<?php the_ID();?></span>
                    </h1>

                </div>
            </div>

        </div>
        <div class="button">
            <button class="btnAddCart" onclick="addCartItem(<?php the_ID()?>)"><i class="fas fa-plus"></i>
                Adicionar ao
                Orçamento</button>
            <button class="btnMoreInformation" onclick="modalinfo(<?php the_ID()?>)"><i class="far fa-eye"></i></button>
        </div>
    </div>
</div>