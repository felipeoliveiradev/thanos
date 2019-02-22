<?php

function fn_institucional_custumizer_home( $wp_customize) {

		//SETTINGS
		//
		//INSTITUCIONAL
		//
		//
		$wp_customize->add_setting('fn_title_container_institucional_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_title_bold_container_institucional_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_title_final_container_institucional_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_corpo_container_institucional_home_block_1', array('default'=>''));

		//Sections
		$wp_customize->add_section('fn_institucional_custumizer_home_section', array(
			'title' => 'Box Home Institucional',
			'priority' => '4'
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
				'fn_title_container_institucional_home_block_1',
						array(
								'label' => 'Titulo Do Container 1',
								'section' => 'fn_institucional_custumizer_home_section',
								'settings' => 'fn_title_container_institucional_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_bold_container_institucional_home_block_1',
						array(
								'label' => 'Titulo BOLD Do Container 1',
								'section' => 'fn_institucional_custumizer_home_section',
								'settings' => 'fn_title_bold_container_institucional_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_final_container_institucional_home_block_1',
						array(
								'label' => 'Titulo Final',
								'section' => 'fn_institucional_custumizer_home_section',
								'settings' => 'fn_title_final_container_institucional_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_corpo_container_institucional_home_block_1',
						array(
								'label' => 'Texto Do Container 1',
								'section' => 'fn_institucional_custumizer_home_section',
								'settings' => 'fn_corpo_container_institucional_home_block_1',
								'type' => 'textarea'
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