<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('theme')) {
	function theme()
	{
		$link = base_url() . 'assets/';
		return $link;
	}
}

if (!function_exists('title')) {
	function title()
	{
		return $value = 'AdminLTE 2';
	}
}
