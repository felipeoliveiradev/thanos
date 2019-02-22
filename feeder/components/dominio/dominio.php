<?php

function fn_dominio_custumizer_home( $wp_customize) {

		//SETTINGS
		$wp_customize->add_setting('fn_title_container_dominio_home', array('default'=>''));
		$wp_customize->add_setting('fn_title_bold_container_dominio_home', array('default'=>''));
		$wp_customize->add_setting('fn_title_final_container_dominio_home', array('default'=>''));

		$wp_customize->add_setting('fn_title_container_dominio_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_title_container_dominio_home_block_2', array('default'=>''));
		$wp_customize->add_setting('fn_title_container_dominio_home_block_3', array('default'=>''));

		//Sections
		$wp_customize->add_section('fn_dominio_custumizer_home_section', array(
			'title' => 'Box Home Dominio',
			'priority' => '1'
		));



		//Controllers

		//
		//
		//
		//TITULO
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_dominio_home',
						array(
								'label' => 'Titulo Do Container',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_container_dominio_home',
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
		//TITULO BOLD
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_bold_container_dominio_home',
						array(
								'label' => 'Titulo Do Container BOLD',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_bold_container_dominio_home',
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
		//TITULO FINAL
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_final_container_dominio_home',
						array(
								'label' => 'Titulo Do Container Final',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_final_container_dominio_home',
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
		//CONTAINER 1
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_dominio_home_block_1',
						array(
								'label' => 'Titulo Do Container 1',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_container_dominio_home_block_1',
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
		//CONTAINER 2
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_dominio_home_block_2',
						array(
								'label' => 'Titulo Do Container 2',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_container_dominio_home_block_2',
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
		//CONTAINER 3
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_dominio_home_block_3',
						array(
								'label' => 'Titulo Do Container 3',
								'section' => 'fn_dominio_custumizer_home_section',
								'settings' => 'fn_title_container_dominio_home_block_3',
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