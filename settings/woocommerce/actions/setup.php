<?php 
    add_action( 'woocommerce_before_checkout_form', 'bbloomer_cart_on_checkout_page_only', 5 );
    add_filter( 'woocommerce_product_tabs', 'cwp_woocommerce_remove_default_tabs' );
    //add_action( 'init', 'bbloomer_hide_price_add_cart_not_logged_in' );
    //add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
    add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );
    add_filter( 'woocommerce_cart_needs_payment', '__return_false' );
    //.
    
    add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );
    //add_action('woocommerce_checkout_init','disable_billing');

    //CAMPOS PERSONALIZADOS
    add_action( 'woocommerce_after_order_notes', 'name_client_woocomerce' ); 
    add_action( 'woocommerce_after_order_notes', 'last_name_client_woocomerce' );
    add_action( 'woocommerce_after_order_notes', 'email_client_woocomerce' );
    add_action( 'woocommerce_after_order_notes', 'telefone_name_client_woocomerce' );
    add_action( 'woocommerce_after_order_notes', 'obs_name_client_woocomerce' );
    
    //VALIDAÇÃO DE CAMPOS PERSONALIZADOS
    add_action( 'woocommerce_checkout_process', 'validar_name_client_woocomerce'); 
    add_action( 'woocommerce_checkout_process', 'validar_last_name_client_woocomerce' );
    add_action( 'woocommerce_checkout_process', 'validar_email_client_woocomerce' );
    add_action( 'woocommerce_checkout_process', 'validar_telefone_name_client_woocomerce' );
    add_action( 'woocommerce_checkout_process', 'validar_obs_name_client_woocomerce' );

    //

    //SALVAR NO BANCO CAMPOS PERSONALIZADOS
    add_action( 'woocommerce_checkout_update_order_meta', 'name_client_checkout_order' );
    add_action( 'woocommerce_checkout_update_order_meta', 'last_name_checkout_order' );
    add_action( 'woocommerce_checkout_update_order_meta', 'email_client_checkout_order' );
    add_action( 'woocommerce_checkout_update_order_meta', 'telefone_checkout_order' );
    add_action( 'woocommerce_checkout_update_order_meta', 'obs_name_checkout_order' );

    //MOSTRAR NO PAINEL OS DADOS
    
    add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_name_client', 10, 1 ); 
    add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_last_name', 10, 1 ); 
    add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_email_client', 10, 1 ); 
    add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_telefone', 10, 1 ); 
    add_action( 'woocommerce_admin_order_data_after_billing_address', 'mostrar_obs_name', 10, 1 ); 
    

    //CAMPO PERSONALIZADO 

    add_action( 'woocommerce_product_options_general_product_data', 'create_field_medida' );
    add_action( 'woocommerce_product_options_general_product_data', 'create_field_revesimento' );

    //CAMPO ADICIONAL PRODUTO 
    add_action( 'add_meta_boxes', 'medida_woocommerce_add_meta_boxes' );
    add_action( 'add_meta_boxes', 'revestimento_woocommerce_add_meta_boxes' );

    //SALVAR CAMPO ADICIONAL PRODUTO
    add_action( 'save_post', 'save_medida_woocommerce_meta_box' );
    add_action( 'save_post', 'save_revestimento_woocommerce_meta_box' );

    
    //remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
    remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
    remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review_heading', 10 );
    //remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 ); 


?>