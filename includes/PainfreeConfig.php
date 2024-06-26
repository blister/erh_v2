<?php

/************************** PHPainfree **************************
Name: PainfreeConfig.php

Author: Eric Ryan Harrison
	me@ericharrison.info
	http://ericharrison.info
****************************************************************/

$dotenv = Dotenv\Dotenv::createImmutable(realpath('../'));
$dotenv->load();

/*************************** Edit Me ***************************/
// WARNING: $Painfree looks for a variable called $PainfreeConfig
// provided by a file called PainfreeConfig.php. It must exist.
// Don't go off changing names willy-nilly or you will probably
// regret it.
$PainfreeConfig = array(

	// ApplicationController is the primary controller for your
	// application. Generic.php is provided, but doesn't do anything
	// except look for the view in the templates/ folder
	'ApplicationController' => 'App.php',

	// BaseView is the name of your base template inside of the templates
	// folder. This base view generally provides the overall framework
	// of output for your application
	'BaseView' => 'app.php',

	// DefaultView is the default view
	'DefaultRoute' => 'main',

	// Name of the folders where application content is housed:
	// PublicFolder - Statically served content and the top-level web resource.
	// TemplateFolder - Templates and views
	// LogicFolder - Logical PHP scripts and Classes
	'PublicFolder'   => 'htdocs',
	'TemplateFolder' => 'templates',
	'LogicFolder'    => 'includes',

	// Name of the folder where your Controllers are defined dynamically
	// by "view" - `/includes/Controllers/{$view}.php`
	'ControllerFolder' => 'Controllers',
	
	// Publicly accessible Routes/Paths
	// The value is the name of the folder under `htdocs/`
	'ImagesFolder' => 'images', // `htdocs/images/`
	'CssFolder'    => 'css',    // `htdocs/css/`
	'JsFolder'     => 'js',     // `htdocs/js/`

	// Name of folder where dynamically loaded "views" are kept
	// for all static resources and templates
	//
	// /htdocs/js/views/{$view}.js, htdocs/css/views/{$view}.css
	// /templates/views/{$view}.php
	'DynamicFolder' => 'views', 

	// DB Configuration
	// each element in the array is a DB server to try. If one
	// fails to connect, it will roll-over to the next
	// leave the array empty for no DB connection
	// 'Database' => array(),
	'Database' => array(
	),

	/*
	// This is an example Database configuration with two DB connections
	// defined.
	// In this example, DBI.php will try to load PrimaryDB first,
	// and if that fails, will then try BackupDB. Both failures
	// would obviously result in application load failure, so
	// just be aware of that possibility.
	//
	// The type parameter tells the DBI which database driver to use.
	// If no "type" parameter is defined, the DBI will default to
	// mysql.
	'Database' => array(
		'PrimaryDB' => array(
			'type'   => 'mysql',
			'host'   => 'hostname.or.ip.of.server.1.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
		'BackupDB' => array(
			'type'   => 'mysql',
			'host'   => 'hostname.or.ip.of.server.2.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
	),
	*/

	// hardcore configuration. only change this if you know what you're doing
	'RouteParameter' => 'route',
);
