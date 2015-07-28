<?php
/**
 * Created by PhpStorm.
 * User: Tahir
 * Date: 6/26/2015
 * Time: 11:16 PM
 */

	function corporato_form_system_theme_settings_alter(&$form, &$form_state)
	{
		$form['corporato_settings'] = array(
			'#type' => 'fieldset',
			'#title' => t('Corporato Settings'),
			'#collapsible' => true,
			'#description' => 'These are the settings for the theme Corporato',
			'#collapsed' => FALSE,
		);

		/* slide show start */
		$form['corporato_settings']['slide_show'] = array(
			'#type' => 'fieldset',
			'#title' => t('Slide Show'),
			'#collapsible' => true,
			'#description' => 'Please choose images for the slide show on the home page. Please note that the image dimenssions must be <b>1170px in width</b> and <b>580px in height.</b>',
			'#collapsed' => FALSE,
		);
		$form['corporato_settings']['slide_show']['slide_1_url'] = array(
			'#type' => 'textfield',
			'#title' => t('Slide 1 URL'),
			'#required' => true,
			'#default_value' => theme_get_setting('slide_1_url'),
		);
		$form['corporato_settings']['slide_show']['slide_2_url'] = array(
			'#type' => 'textfield',
			'#title' => t('Slide 2 URL'),
			'#required' => true,
			'#default_value' => theme_get_setting('slide_2_url'),
		);
		$form['corporato_settings']['slide_show']['slide_3_url'] = array(
			'#type' => 'textfield',
			'#title' => t('Slide 3 URL'),
			'#required' => true,
			'#default_value' => theme_get_setting('slide_3_url'),
		);
		/* slide show end */

		/* Address start */
		$form['corporato_settings']['addresses'] = array(
			'#type' => 'fieldset',
			'#title' => t('Physical addresses and Social address'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['corporato_settings']['addresses']['telephone_number'] = [
			'#type' => 'textfield',
			'#title' => t('Telephone Number'),
			'#required' => false,
			'#default_value' => theme_get_setting('telephone_number'),
		];
		$form['corporato_settings']['addresses']['fax_number'] = [
			'#type' => 'textfield',
			'#title' => t('Fax Number'),
			'#required' => false,
			'#default_value' => theme_get_setting('fax_number'),
		];
		$form['corporato_settings']['addresses']['mailing_address'] = [
			'#type' => 'textfield',
			'#title' => t('Mailing Address'),
			'#required' => false,
			'#default_value' => theme_get_setting('mailing_address'),
		];
		$form['corporato_settings']['addresses']['email_address'] = [
			'#type' => 'textfield',
			'#title' => t('Email Address'),
			'#required' => false,
			'#default_value' => theme_get_setting('email_address'),
		];
		$form['corporato_settings']['addresses']['twitter_url'] = [
			'#type' => 'textfield',
			'#title' => t('Twitter URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('twitter_url'),
		    '#description' => t('Please complete URL starting with http://'),
		];
		$form['corporato_settings']['addresses']['facebook_url'] = [
			'#type' => 'textfield',
			'#title' => t('Facebook Page URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('facebook_url'),
			'#description' => t('Please enter a complete URL starting with <b>http://</b>'),
		];
		$form['corporato_settings']['addresses']['linkedin_url'] = [
			'#type' => 'textfield',
			'#title' => t('LinkedIn URL'),
			'#required' => false,
			'#default_value' => theme_get_setting('linkedin_url'),
			'#description' => t('Please enter a complete URL starting with <b>http://</b>'),
		];
		/* Address end */

		/* features */
		$form['corporato_settings']['features'] = array(
			'#type' => 'fieldset',
			'#title' => t('Home Page Features offered Items'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['corporato_settings']['features']['features_item_1'] = [
			'#type' => 'textarea',
			'#title' => t('Features Item 1'),
			'#description' => t('Paste the HTML code for the feature'),
			'#required' => true,
			'#default_value' => theme_get_setting('features_item_1'),
		];
		$form['corporato_settings']['features']['features_item_2'] = [
			'#type' => 'textarea',
			'#title' => t('Features Item 2'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the feature'),
			'#default_value' => theme_get_setting('features_item_2'),
		];
		$form['corporato_settings']['features']['features_item_3'] = [
			'#type' => 'textarea',
			'#title' => t('Features Item 3'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the feature'),
			'#default_value' => theme_get_setting('features_item_3'),
		];
		$form['corporato_settings']['features']['features_item_4'] = [
			'#type' => 'textarea',
			'#title' => t('Features Item 4'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the feature'),
			'#default_value' => theme_get_setting('features_item_4'),
		];
		/* features end */

		/* features */
		$form['corporato_settings']['quicklinks'] = array(
			'#type' => 'fieldset',
			'#title' => t('Home Page Bottom Quick-links'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['corporato_settings']['quicklinks']['quicklink_1_image_url'] = [
			'#type' => 'text_field',
			'#title' => t('Quick-link 1 Image URL'),
			'#description' => t('Paste the full path to the image including <b>http://</b>'),
			'#required' => true,
			'#default_value' => theme_get_setting('quicklink_1_image_url'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_1_text'] = [
			'#type' => 'textarea',
			'#title' => t('Quick-link 1 Text'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the Quick-link 1'),
			'#default_value' => theme_get_setting('quicklink_1_text'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_2_image_url'] = [
			'#type' => 'text_field',
			'#title' => t('Quick-link 2 Image URL'),
			'#description' => t('Paste the full path to the image including <b>http://</b>'),
			'#required' => true,
			'#default_value' => theme_get_setting('quicklink_2_image_url'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_2_text'] = [
			'#type' => 'textarea',
			'#title' => t('Quick-link 2 Text'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the Quick-link 2'),
			'#default_value' => theme_get_setting('quicklink_2_text'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_3_image_url'] = [
			'#type' => 'text_field',
			'#title' => t('Quick-link 3 Image URL'),
			'#description' => t('Paste the full path to the image including <b>http://</b>'),
			'#required' => true,
			'#default_value' => theme_get_setting('quicklink_3_image_url'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_3_text'] = [
			'#type' => 'textarea',
			'#title' => t('Quick-link 3 Text'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the Quick-link 3'),
			'#default_value' => theme_get_setting('quicklink_3_text'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_4_image_url'] = [
			'#type' => 'text_field',
			'#title' => t('Quick-link 4 Image URL'),
			'#description' => t('Paste the full path to the image including <b>http://</b>'),
			'#required' => true,
			'#default_value' => theme_get_setting('quicklink_4_image_url'),
		];
		$form['corporato_settings']['quicklinks']['quicklink_4_text'] = [
			'#type' => 'textarea',
			'#title' => t('Quick-link 4 Text'),
			'#required' => true,
			'#description' => t('Paste the HTML code for the Quick-link 4'),
			'#default_value' => theme_get_setting('quicklink_4_text'),
		];
		/* features end */

		/* footer start */
		$form['corporato_settings']['footer'] = array(
			'#type' => 'fieldset',
			'#title' => t('Footer'),
			'#collapsible' => true,
			'#collapsed' => FALSE,
		);
		$form['corporato_settings']['footer']['footer_text'] = [
			'#type' => 'textfield',
			'#required' => true,
			'#title' => t('Footer Text'),
			'#default_value' => theme_get_setting('footer_text'),
			'#description'   => t("Put your footer text here."),
		];
		/* footer end */
	}