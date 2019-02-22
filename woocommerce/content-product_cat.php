<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="col-sm-12 col-md-3">
    <?php
/**
 * woocommerce_before_subcategory hook.
 *
 * @hooked woocommerce_template_loop_category_link_open - 10
 */
do_action('woocommerce_before_subcategory', $category);

?>
    <div class="productPrincipalCategory" style="width:100%; ">
        <div class="image" style="width:100%">


            <picture style="width:100%">
                <?php do_action('woocommerce_before_subcategory_title', $category);?>
            </picture>

        </div>
        <div class="textMoreArrow">

            <div class="texts">
                <div class="innerTexts">
                    <h1><?php echo $category->name; ?><br />
                    </h1>

                </div>
            </div>
        </div>
    </div>


    <?php
/**
 * woocommerce_after_subcategory hook.
 *
 * @hooked woocommerce_template_loop_category_link_close - 10
 */
do_action('woocommerce_after_subcategory', $category);?>
</div>