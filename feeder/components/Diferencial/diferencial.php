<?php

function fn_diferencial_custumizer_home( $wp_customize) {

		//SETTINGS
		//
		//Titulo
		//
		//
		$wp_customize->add_setting('fn_title_container_diferencial_home', array('default'=>''));
		$wp_customize->add_setting('fn_title_bold_container_diferencial_home', array('default'=>''));
		$wp_customize->add_setting('fn_title_final_container_diferencial_home', array('default'=>''));
		//
		//BOX 1
		//
		//
		$wp_customize->add_setting('fn_title_container_diferencial_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_icon_container_diferencial_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_corpo_container_diferencial_home_block_1', array('default'=>''));
		//
		//BOX 2
		//
		//
		$wp_customize->add_setting('fn_title_container_diferencial_home_block_2', array('default'=>''));
		$wp_customize->add_setting('fn_icon_container_diferencial_home_block_2', array('default'=>''));
		$wp_customize->add_setting('fn_corpo_container_diferencial_home_block_2', array('default'=>''));
		//
		//BOX 3
		//
		//
		$wp_customize->add_setting('fn_title_container_diferencial_home_block_3', array('default'=>''));
		$wp_customize->add_setting('fn_icon_container_diferencial_home_block_3', array('default'=>''));
		$wp_customize->add_setting('fn_corpo_container_diferencial_home_block_3', array('default'=>''));



		//Sections
		$wp_customize->add_section('fn_diferencial_custumizer_home_section', array(
			'title' => 'Box Home Diferencial',
			'priority' => '2'
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
				'fn_title_container_diferencial_home',
						array(
								'label' => 'Titulo Do Container',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_container_diferencial_home',
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
				'fn_title_bold_container_diferencial_home',
						array(
								'label' => 'Titulo Do Container BOLD',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_bold_container_diferencial_home',
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
				'fn_title_final_container_diferencial_home',
						array(
								'label' => 'Titulo Do Container Final',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_final_container_diferencial_home',
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
		//BOX 1
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_diferencial_home_block_1',
						array(
								'label' => 'Titulo Do Container 1',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_container_diferencial_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_icon_container_diferencial_home_block_1',
						array(
								'label' => 'Icone Do Container 1',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_icon_container_diferencial_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_corpo_container_diferencial_home_block_1',
						array(
								'label' => 'Texto Do Container 1',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_corpo_container_diferencial_home_block_1',
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
				'fn_title_container_diferencial_home_block_2',
						array(
								'label' => 'Titulo Do Container 2',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_container_diferencial_home_block_2',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_icon_container_diferencial_home_block_2',
						array(
								'label' => 'Icone Do Container 2',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_icon_container_diferencial_home_block_2',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_corpo_container_diferencial_home_block_2',
						array(
								'label' => 'Texto Do Container 2',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_corpo_container_diferencial_home_block_2',
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


































		//
		//
		//
		//BOX 3
		//
		//
		//
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_container_diferencial_home_block_3',
						array(
								'label' => 'Titulo Do Container 3',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_title_container_diferencial_home_block_3',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_icon_container_diferencial_home_block_3',
						array(
								'label' => 'Icone Do Container 3',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_icon_container_diferencial_home_block_3',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_corpo_container_diferencial_home_block_3',
						array(
								'label' => 'Texto Do Container 3',
								'section' => 'fn_diferencial_custumizer_home_section',
								'settings' => 'fn_corpo_container_diferencial_home_block_3',
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