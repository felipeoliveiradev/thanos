<?php
get_header('shop');

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

?>
<style>
.woocommerce-checkout h2 {
    display: none;
}
</style>
<div class="col-12 cartContainerPage">
    <div class="innerForm">
        <div class=" title">DADOS DO CLIENTE</div>
    </div>
    <div class="formulario">
        <form name="checkout" method="post" class="" action="<?php echo esc_url(wc_get_checkout_url()); ?>"
            enctype="multipart/form-data">
            <?php if ($checkout->get_checkout_fields()): ?><?php do_action('woocommerce_checkout_before_customer_details');
?><?php do_action('woocommerce_checkout_shipping');
?><?php do_action('woocommerce_checkout_after_customer_details');
?><?php endif;
?>
            <h3 id="order_review_heading"><?php esc_html_e('Your order', 'woocommerce');
?></h3>
            <?php do_action('woocommerce_checkout_before_order_review');
?><div id="order_review"
                class="woocommerce-checkout-review-order"><?php do_action('woocommerce_checkout_order_review');
?></div>
            <?php do_action('woocommerce_checkout_after_order_review');
?></form>
    </div>
</div>
</div>
</div>
</div>
</form>
</section><?php do_action('woocommerce_after_checkout_form', $checkout);
?><?php get_footer();
?>