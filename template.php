<?php

	function corporato_preprocess_page(&$variables)
	{
		$main_menu_tree = menu_tree_all_data('main-menu');
		//$expanded = menu_tree_output($main_menu_tree);

		//krumo($main_menu_tree);
		//krumo($expanded);
		$menuParent = array_slice(menu_get_active_trail(), 1);
		//krumo($menuParent);

		$output = '<ul>'._process_menu_node($main_menu_tree, $menuParent).'</ul>';
		//krumo($output);
		//krumo($expanded);
		$variables['corporato_main_menu'] = $output;
	}

	function corporato_js_alter(&$javascript)
	{
		// Swap out jQuery to use an updated version of the library.
		$javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'corporato') . '/js/jquery-1.9.1.min.js';
	}

	/**
	 * Implements hook_html_head_alter().
	 * This will overwrite the default meta character type tag with HTML5 version.
	 */
	function corporato_html_head_alter(&$head_elements)
	{
		$head_elements['system_meta_content_type']['#attributes'] = array(
		    'http-equiv' => "Content-Type",
		    'content' => 'text/html; charset=utf-8'
		);
	}

	function corporato_form_search_form_alter(&$form, &$form_state)
	{
		if (arg(1) == 'node')
		{
			$form['#access'] = FALSE;
		}
	}

	function corporato_page_alter($page)
	{
		// <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		$viewport = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
				'name' =>  'viewport',
				'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
			)
		);
		drupal_add_html_head($viewport, 'viewport');
	}

	function _process_menu_node($nodes, $activeTrail)
	{
		$output = '';
		foreach($nodes as $exp)
		{
			if(isset($exp['link']))
			{
				//krumo($exp['link']);
				$output .= '<li class="';
				if($exp['below'])
				{
					$output .= ' has-submenu ';
				}
				foreach($activeTrail as $at)
				{
					if(strpos($exp['link']['mlid'],$at['mlid']) === 0)
					{
						$output .= ' active ';
					}
				}
				$output .= '"><a href="';
				if(strpos($exp['link']['href'], 'drupal') > 0)
				{
					$output .= $exp['link']['href'];
				}
				else
				{
					$output .= $GLOBALS['base_path'] .$exp['link']['href'];
				}
				$output .= '">' . strtoupper($exp['link']['link_title']) . '</a>';
				if($exp['below'])
				{
					$output .= '<ul class="submenu">' . _process_menu_node($exp['below'], $activeTrail) . '</ul>';
				}
				$output .= '</li>';
			}
		}
		return $output;
	}

	function _social_address()
	{
		$output = '';
		$output .= '<div class="sidebar-content"><p>';
		if(theme_get_setting('telephone_number')) :
			$output .= 'Tel: '. theme_get_setting('telephone_number') .'<br>';
		endif;
		if(theme_get_setting('fax_number')) :
			$output .= 'Fax: '. theme_get_setting('fax_number') .'<br>';
		endif;
		if(theme_get_setting('email_address')) :
			$output .= 'Email: <a href="mailto:'.theme_get_setting('email_address').'">'.theme_get_setting('email_address').'</a><br>';
		endif;
		if(theme_get_setting('mailing_address')) :
			$output .= 'Mailing Address: '. theme_get_setting('mailing_address');
		endif;
		$output .= '</p><h3>Follow us our services</h3><ul class="social">';
		if(theme_get_setting('facebook_url')) :
			$output .= '<li><a href="'.theme_get_setting('facebook_url').'" title="facebook">f</a></li>';
		endif;
		if(theme_get_setting('twitter_url')) :
			$output .= '<li><a href="'.theme_get_setting('twitter_url').'" title="twitter">t</a></li>';
		endif;
		if(theme_get_setting('linkedin_url')) :
			$output .= '<li><a href="'.theme_get_setting('linkedin_url').'" title="linkedIn">in</a></li>';
		endif;
		$output .= '</ul></div><!--/sidebar-content-->';
		return $output;
	}

	function _sidebar_menu()
	{
		$parent = menu_link_get_preferred($_GET['q']);
		$parameters = array(
			'active_trail' => array($parent['plid']),
			'only_active_trail' => FALSE,
			'min_depth' => $parent['depth']+1,
			'max_depth' => $parent['depth']+1,
			'conditions' => array('plid' => $parent['mlid']),
		);
		$children = menu_build_tree($parent['menu_name'], $parameters);
		return '<ul class="sidebar-menu">'._process_child_menu_node($children).'</ul>';
	}

	function _process_child_menu_node($nodes)
	{
		$output = '';
		foreach($nodes as $child)
		{
			$output .= '<li';
			if($child['below'])
			{
				$output .= ' class="has-submenu"';
			}
			$output .= '><a href="'.$child['link']['href'].'">'.$child['link']['title'].'</a>';
			if($child['below'])
			{
				$output .= '<ul class="submenu">' . _process_child_menu_node($child['below']) . '</ul>';
			}
			$output .= '</li>';
		}
		return $output;
	}