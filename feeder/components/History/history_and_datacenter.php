<?php

function fn_history_and_datacenter_custumizer_home( $wp_customize) {

		//SETTINGS
		//
		//BOX 1
		//
		//
		$wp_customize->add_setting('fn_title_container_history_and_datacenter_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_title_bold_container_history_and_datacenter_home_block_1', array('default'=>''));
		$wp_customize->add_setting('fn_corpo_container_history_and_datacenter_home_block_1', array('default'=>''));
		//
		//BOX 2
		//
		//
		$wp_customize->add_setting('fn_title_container_history_and_datacenter_home_block_2', array('default'=>''));
		$wp_customize->add_setting('fn_title_bold_container_history_and_datacenter_home_block_2', array('default'=>''));
		$wp_customize->add_setting('fn_html_or_text_container_history_and_datacenter_home_block_2', array('default'=>''));



		//Sections
		$wp_customize->add_section('fn_history_and_datacenter_custumizer_home_section', array(
			'title' => 'Box Home Empresa e Data Center',
			'priority' => '3'
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
				'fn_title_container_history_and_datacenter_home_block_1',
						array(
								'label' => 'Titulo Do Container 1',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_title_container_history_and_datacenter_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_bold_container_history_and_datacenter_home_block_1',
						array(
								'label' => 'Titulo BOLD Do Container 1',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_title_bold_container_history_and_datacenter_home_block_1',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_corpo_container_history_and_datacenter_home_block_1',
						array(
								'label' => 'Texto Do Container 1',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_corpo_container_history_and_datacenter_home_block_1',
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
				'fn_title_container_history_and_datacenter_home_block_2',
						array(
								'label' => 'Titulo Do Container 2',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_title_container_history_and_datacenter_home_block_2',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_title_bold_container_history_and_datacenter_home_block_2',
						array(
								'label' => 'Titulo BOlD Do Container 2',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_title_bold_container_history_and_datacenter_home_block_2',
								'type' => 'text'
						)

			)

		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'fn_html_or_text_container_history_and_datacenter_home_block_2',
						array(
								'label' => 'HTML ou Texto Do Container 2',
								'section' => 'fn_history_and_datacenter_custumizer_home_section',
								'settings' => 'fn_html_or_text_container_history_and_datacenter_home_block_2',
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