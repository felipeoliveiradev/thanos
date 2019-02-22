<?php
/*
Template Name: Budget
Template Post Type: page
 */

$plugins = new Plugin();
$banner = new Banner();
$product = new Product();

?>

<section class="budgetPage">
    <div class="container">
        <div class="row linha-alert">
            <div class="innerText">
                <h1>ORÇAMENTO</h1>
            </div>
            <div class="attentionCard">

                <div class="alert"> <i class="fas fa-exclamation-triangle"></i></div>
                <div class="text">
                    <h3>CAIXA DE AVISO PARA QUANDO OUVER ALGUMA INFORMAÇÃO RELEVANTE PARA O CLIENTE NO SITE
                    </h3>
                </div>

            </div>
        </div>

        <div class="row linha">
            <div class="col-sm-12 col-md-12 left">
                <div class="row">
                    <?

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

                    <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>"
                        method="post">
                        <?php do_action('woocommerce_before_cart_table');?>

                        <div class="row">
                            <?php do_action('woocommerce_before_cart_contents');?>

                            <?php
foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);

        ?>

                            <div class="col-sm-12 col-lg-4">

                                <div
                                    class="productPrincipal <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                    <div class="image">


                                        <picture>
                                            <?php
$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

        if (!$product_permalink) {
            echo $thumbnail; // PHPCS: XSS ok.
        } else {
            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
        }
        ?>
                                        </picture>

                                    </div>
                                    <div class="textMoreArrow">

                                        <div class="texts">
                                            <div class="innerTexts">
                                                <h1 data-title="<?php esc_attr_e('Product', 'woocommerce');?>">
                                                    <?php
if (!$product_permalink) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
        } else {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
        }

        do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

        // Meta data.
        echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

        // Backorder notification.
        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
        }
        ?>

                                                    <br />
                                                    <span>COD:<?php echo $sku; ?></span>
                                                </h1>

                                            </div>
                                        </div>


                                        <div class="
                                                        arrows">
                                            <ul>
                                                <li class="arrowsSelectUp"><i class="fas fa-angle-up"></i>
                                                </li>
                                                <li data-title="<?php esc_attr_e('Quantity', 'woocommerce');?>">
                                                    <?php
if ($_product->is_sold_individually()) {
            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
        } else {
            $product_quantity = woocommerce_quantity_input(array(
                'input_name' => "cart[{$cart_item_key}][qty]",
                'input_value' => $cart_item['quantity'],
                'max_value' => $_product->get_max_purchase_quantity(),
                'min_value' => '0',
                'product_name' => $_product->get_name(),
            ), $_product, false);
        }

        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
        ?>
                                                </li>
                                                <li class="arrowsSelectDown"><i class="fas fa-angle-down"></i>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce');?>



                            <?php }}?>
                        </div>
                </div>

            </div>




        </div>
        <?php do_action('woocommerce_cart_actions');?>
        <?php

/**
 * Cart collaterals hook.
 *
 * @hooked woocommerce_cross_sell_display
 * @hooked woocommerce_cart_totals - 10
 */
do_action('woocommerce_cart_collaterals');
?>




    </div>
    </div>
    <div class="carrinhoContainerFullFixed">


        <button type="submit" class="btn outline" name="update_cart"
            value="<?php esc_attr_e('Update cart', 'woocommerce');?>"><?php esc_html_e('Update cart', 'woocommerce');?></button>

        <?php do_action('woocommerce_cart_contents');?>


        <?php do_action('woocommerce_after_cart_contents');?>
        <?php do_action('woocommerce_after_cart_table');?>
        <?php do_action('woocommerce_after_cart');?>
    </div>