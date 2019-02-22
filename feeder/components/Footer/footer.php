<?php

function fn_footer_customizer( $wp_customize) {

		//SETTINGS
		//
		//footer
		//
		//
		$wp_customize->add_setting('fn_title_footer_customizer_left', array('default'=>''));
		$wp_customize->add_setting('fn_imagem_footer_customizer_left', array('default'=>''));
		$wp_customize->add_setting('fn_link_imagem_footer_customizer_left', array('default'=>''));



		$wp_customize->add_setting('fn_title_footer_customizer_right', array('default'=>''));

		$wp_customize->add_setting('fn_facebook_footer_customizer_right', array('default'=>''));
		$wp_customize->add_setting('fn_twitter_footer_customizer_right', array('default'=>''));
		$wp_customize->add_setting('fn_whatsapp_footer_customizer_right', array('default'=>''));
		$wp_customize->add_setting('fn_instagram_footer_customizer_right', array('default'=>''));

		//Sections
		$wp_customize->add_section('fn_footer_customizer', array(
			'title' => 'Box Footer',
			'priority' => '6'
		));



		//Controllers

	
		//
		//
		//
		//BOX 1
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_footer_customizer_left',
						array(
								'label' => 'Titulo Do Container 1',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_title_footer_customizer_left',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_imagem_footer_customizer_left',
						array(
								'label' => 'URL da Imagem',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_imagem_footer_customizer_left',
								'type' => 'text'
						)

			)

		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_link_imagem_footer_customizer_left',
						array(
								'label' => 'Link da Imagem',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_link_imagem_footer_customizer_left',
								'type' => 'text'
						)

			)

		); 

		//
		//
		//
		//
		//
		//



		

	
		//
		//
		//
		//BOX 2
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_footer_customizer_right',
						array(
								'label' => 'Titulo Do Container 2',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_title_footer_customizer_right',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_facebook_footer_customizer_right',
						array(
								'label' => 'Link do Facebook',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_facebook_footer_customizer_right',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_twitter_footer_customizer_right',
						array(
								'label' => 'Link do Twitter',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_twitter_footer_customizer_right',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_whatsapp_footer_customizer_right',
						array(
								'label' => 'Link do WhatsApp',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_whatsapp_footer_customizer_right',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_instagram_footer_customizer_right',
						array(
								'label' => 'Link do Instagram',
								'section' => 'fn_footer_customizer',
								'settings' => 'fn_instagram_footer_customizer_right',
								'type' => 'text'
						)

			)

		);


		//
		//
		//
		//
		//
		//






































}