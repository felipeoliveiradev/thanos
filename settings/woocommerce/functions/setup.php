<?php
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

function bbloomer_cart_on_checkout_page_only()
{

    if (is_wc_endpoint_url('carrinho')) {
        return;
    }

    echo '
    <div class="row" style="margin-top:1rem;">
    <div class="small-12 col-lg-8">';
    echo do_shortcode('[woocommerce_cart]');
    echo '</div">';
    echo '<div class="small-12 col-lg-3">';

}
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_first_name']); //remover primeiro nome
    unset($fields['billing']['billing_last_name']); //remover sobrenome
    unset($fields['billing']['billing_company']); //remover empresa
    unset($fields['billing']['billing_address_1']); //remover endereço 1

    unset($fields['billing']['billing_address_2']); //remover endereço 2
    unset($fields['billing']['billing_city']); //remover cidade
    unset($fields['billing']['billing_postcode']); //remover cep
    unset($fields['billing']['billing_country']); //remover país
    unset($fields['billing']['billing_state']); //remover estado
    unset($fields['billing']['billing_phone']); //remover telefone
    unset($fields['order']['order_comments']); //remover comentários do pedido / compra
    unset($fields['billing']['billing_email']); //remover email
    unset($fields['billing']['billing_city']); //remover cidade

    $fields['billing_city']['required'] = false;
    $fields['billing_address_1']['required'] = false;
    $fields['billing_address_2']['required'] = false;
    $fields['billing_postcode']['required'] = false;
    $fields['billing_state']['required'] = false;
    $fields['billing_phone']['required'] = false;
    $fields['billing_city']['required'] = false;

    return $fields;
}

function remove_order_notes($fields)
{
    unset($fields['order']['order_comments']);
    return $fields;
}
function bbloomer_hide_price_add_cart_not_logged_in()
{
    if (!is_user_logged_in()) {
        remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
        remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
    }
}
function disable_shipping_calc_on_cart($show_shipping)
{
    if (is_cart()) {
        return false;
    }
    return $show_shipping;
}
function disable_billing($checkout)
{
    $checkout->checkout_fields['billing'] = array();
    return $checkout;
}

/**
 *
 *
 * CAMPOS PERSONALIZADOS
 *
 *
 **/

function name_client_woocomerce($checkout)
{
    woocommerce_form_field('name_client_woocomerce',
        array(
            'type' => 'text',
            'class' => array(''),
            'placeholder' => __('Nome'),
        ),
        $checkout->get_value('name_client_woocomerce')
    );

}

function last_name_client_woocomerce($checkout)
{
    woocommerce_form_field('last_name_client_woocomerce',
        array(
            'type' => 'text',
            'class' => array(''),
            'placeholder' => __('Sobrenome'),
        ),
        $checkout->get_value('last_name_client_woocomerce')
    );

}

function email_client_woocomerce($checkout)
{
    woocommerce_form_field('email_client_woocomerce',
        array(
            'type' => 'text',
            'class' => array(''),
            'placeholder' => __('E-mail'),
        ),
        $checkout->get_value('email_client_woocomerce')
    );

}

function telefone_name_client_woocomerce($checkout)
{
    woocommerce_form_field('telefone_name_client_woocomerce',
        array(
            'type' => 'number',
            'class' => array(''),
            'placeholder' => __('Telefone'),
        ),
        $checkout->get_value('telefone_name_client_woocomerce')
    );

}

function obs_name_client_woocomerce($checkout)
{
    woocommerce_form_field('obs_name_client_woocomerce',
        array(
            'type' => 'textarea',
            'class' => array(''),
            'placeholder' => __('Observacao'),
        ),
        $checkout->get_value('obs_name_client_woocomerce')
    );

}

/**
 *
 * VALIDAR CAMPOS
 *
 */

function validar_name_client_woocomerce()
{
    if (empty($_POST['name_client_woocomerce'])) {
        wc_add_notice(__('O campo nome é obrigatorio.'), 'error');
    }

}

function validar_last_name_client_woocomerce()
{
    if (empty($_POST['last_name_client_woocomerce'])) {
        wc_add_notice(__('O campo sobrenome é obrigatorio.'), 'error');
    }

}

function validar_email_client_woocomerce()
{
    if (empty($_POST['email_client_woocomerce'])) {
        wc_add_notice(__('O campo e-mail é obrigatorioo.'), 'error');
    }

}

function validar_telefone_name_client_woocomerce()
{
    if (empty($_POST['telefone_name_client_woocomerce'])) {
        wc_add_notice(__('O campo telefone é obrigatorio.'), 'error');
    }

}

function validar_obs_name_client_woocomerce()
{
    if (empty($_POST['obs_name_client_woocomerce'])) {
        wc_add_notice(__('O campo observação é obrigatorio.'), 'error');
    }

}

/**
 *
 * UPDATE CAMPOS
 *
 */
function name_client_checkout_order($order_id)
{
    if (!empty($_POST['name_client_woocomerce'])) {
        update_post_meta($order_id, 'Nome Cliente', sanitize_text_field($_POST['name_client_woocomerce']));
    }
}

function last_name_checkout_order($order_id)
{
    if (!empty($_POST['last_name_client_woocomerce'])) {
        update_post_meta($order_id, 'Sobrenome Cliente', sanitize_text_field($_POST['last_name_client_woocomerce']));
    }
}
function email_client_checkout_order($order_id)
{
    if (!empty($_POST['email_client_woocomerce'])) {
        update_post_meta($order_id, 'E-mail Cliente', sanitize_text_field($_POST['email_client_woocomerce']));
    }
}
function telefone_checkout_order($order_id)
{
    if (!empty($_POST['telefone_name_client_woocomerce'])) {
        update_post_meta($order_id, 'Telefone Cliente', sanitize_text_field($_POST['telefone_name_client_woocomerce']));
    }
}
function obs_name_checkout_order($order_id)
{
    if (!empty($_POST['obs_name_client_woocomerce'])) {
        update_post_meta($order_id, 'Observacao Cliente', sanitize_text_field($_POST['obs_name_client_woocomerce']));
    }
}

/**
 *
 * MOSTRA OS CAMPOS NO PAINEL
 *
 */

function mostrar_name_client($order)
{
    echo '<p><strong>' . __('Nome') . '</strong> ' . get_post_meta($order->id, 'Nome Cliente', true) . '</p>';
}
function mostrar_last_name($order)
{
    echo '<p><strong>' . __('Sobrenome') . '</strong> ' . get_post_meta($order->id, 'Sobrenome Cliente', true) . '</p>';
}

function mostrar_email_client($order)
{
    echo '<p><strong>' . __('E-mail') . '</strong> ' . get_post_meta($order->id, 'E-mail Cliente', true) . '</p>';
}

function mostrar_telefone($order)
{
    echo '<p><strong>' . __('Telefone') . '</strong> ' . get_post_meta($order->id, 'Telefone Cliente', true) . '</p>';
}
function mostrar_obs_name($order)
{
    echo '<p><strong>' . __('Obs') . '</strong> ' . get_post_meta($order->id, 'Observacao Cliente', true) . '</p>';
}

/**
 *
 * CAMPO ADICIONAL WOOCOMERCE PRODUTO
 *
 */

//ADICIONAL MEDIDA

function medida_woocommerce_image($post)
{
    wp_nonce_field('medida_woocommerce_submit', 'medida_woocommerce_nonce');
    $medida_woocommerce_stored_data = get_post_meta($post->ID);?>

<p>
    <label for="case-study-bg" class="">Medida Imagem</label>
    <img style="max-width:200px;height:auto;" id="medida-meta-image-preview"
        src="<?php if (isset($medida_woocommerce_stored_data['medida-meta-image'])) {echo $medida_woocommerce_stored_data['medida-meta-image'][0];}?>" />
    <input type="text" name="medida-meta-image" id="medida-meta-image" class="meta_image"
        value="<?php if (isset($medida_woocommerce_stored_data['medida-meta-image'])) {echo $medida_woocommerce_stored_data['medida-meta-image'][0];}?>" />
    <input type="button" id="medida-meta-image-button" class="button" value="Choose or Upload an Image" />
</p>
<script>
jQuery('#medida-meta-image-button').click(function() {

    var send_attachment_bkp = wp.media.editor.send.attachment;

    wp.media.editor.send.attachment = function(props, attachment) {

        jQuery('#medida-meta-image').val(attachment.url);
        jQuery('#medida-meta-image-preview').attr('src', attachment.url);
        wp.media.editor.send.attachment = send_attachment_bkp;
    }

    wp.media.editor.open();

    return false;
});
</script>

<?php
}

// ADICIONAL REVESTIMENTO

function revestimento_woocommerce_image($post)
{
    wp_nonce_field('revestimento_woocommerce_submit', 'revestimento_woocommerce_nonce');
    $revestimento_woocommerce_stored_data = get_post_meta($post->ID);?>

<p>
    <label for="case-study-bg" class="">Revestimento Imagem</label>
    <img style="max-width:200px;height:auto;" id="revestimento-meta-image-preview"
        src="<?php if (isset($revestimento_woocommerce_stored_data['revestimento-meta-image'])) {echo $revestimento_woocommerce_stored_data['revestimento-meta-image'][0];}?>" />
    <input type="text" name="revestimento-meta-image" id="revestimento-meta-image" class="meta_image"
        value="<?php if (isset($revestimento_woocommerce_stored_data['revestimento-meta-image'])) {echo $revestimento_woocommerce_stored_data['revestimento-meta-image'][0];}?>" />
    <input type="button" id="revestimento-meta-image-button" class="button" value="Choose or Upload an Image" />
</p>
<script>
jQuery('#revestimento-meta-image-button').click(function() {

    var send_attachment_bkp = wp.media.editor.send.attachment;

    wp.media.editor.send.attachment = function(props, attachment) {

        jQuery('#revestimento-meta-image').val(attachment.url);
        jQuery('#revestimento-meta-image-preview').attr('src', attachment.url);
        wp.media.editor.send.attachment = send_attachment_bkp;
    }

    wp.media.editor.open();

    return false;
});
</script>

<?php

}

/**
 *
 * METABOX ADICIONAL PRODUTO (ADCIONAR O CAMPO)
 *
 */

function revestimento_woocommerce_add_meta_boxes()
{
    add_meta_box('revestimento-woocommerce-image', 'Revestimento', 'revestimento_woocommerce_image', 'product', 'side',
        'low');
}

function medida_woocommerce_add_meta_boxes()
{
    add_meta_box('medida-woocommerce-image', 'Medida', 'medida_woocommerce_image', 'product', 'side',
        'low');
}
/**
 *
 * SALVAR O CAMPO ADICIONAL WOOCOMMERCE
 *
 */
// MEDIDA
function save_medida_woocommerce_meta_box($post_id)
{
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['medida_woocommerce_nonce']) && wp_verify_nonce($_POST['medida_woocommerce_nonce'
    ], 'medida_woocommerce_submit')) ? 'true' : 'false';

// Exits script depending on save status
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

// Checks for input and sanitizes/saves if needed
    if (isset($_POST['medida-meta-image'])) {
        update_post_meta($post_id, 'medida-meta-image', $_POST['medida-meta-image']);
    }
}

//REVESTIMENTO
function save_revestimento_woocommerce_meta_box($post_id)
{
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['revestimento_woocommerce_nonce']) && wp_verify_nonce($_POST['revestimento_woocommerce_nonce'
    ], 'revestimento_woocommerce_submit')) ? 'true' : 'false';

    // Exits script depending on save status
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if (isset($_POST['revestimento-meta-image'])) {
        update_post_meta($post_id, 'revestimento-meta-image', $_POST['revestimento-meta-image']);
    }
}
?>