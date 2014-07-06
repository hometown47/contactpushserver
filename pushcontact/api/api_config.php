<?php

// Configuration file for api.php
// Another change

$config = array(
	// These are the settings for development mode
	'development' => array(
		'db' => array(
			'host'     => 'db6.awardspace.net',
			'dbname'   => '1698700_foo',
			'username' => '1698700_foo',
			'password' => '6NY-3J4-PYH-5rW',
			),
		),

	// These are the settings for production mode
	'production' => array(
		'db' => array(
			'host'     => 'localhost',
			'dbname'   => 'pushchat',
			'username' => 'pushchat',
			'password' => 'password',
			),
		),
	);
