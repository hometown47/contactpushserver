<?php

// Configuration file for api.php
// Another change

$config = array(
	// These are the settings for development mode
	'development' => array(
		'db' => array(
					'host'     => 'localhost',
			'dbname'   => 'pushcontact',
			'username' => 'pushcontact',
			'password' => 'pushcontact',
	//		'host'     => 'mysql.hostinger.co.uk',
	//		'dbname'   => 'u163695907_pct',
	//		'username' => 'u163695907_pct',
	//		'password' => 'ENLm0ThILYMWZ',
			),
		// Name and path of our log file
		'logfile' => '../log/push_development.log',
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
