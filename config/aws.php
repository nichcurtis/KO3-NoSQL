<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'credentials' => array(
		'@default' => array(
			'key' => 'YOURAPIKEY',
			'secret' => 'YOURSECRET',
			'default_cache_config' => MODPATH . 'cache/aws',
			'certificate_authority' => false
		)
	)
);
