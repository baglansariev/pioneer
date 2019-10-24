<?php

	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('APPLICATION_PATH', DOCUMENT_ROOT . '/application/');
	define('PUBLIC_PATH', DOCUMENT_ROOT . '/public/');
	define('CORE_PATH', APPLICATION_PATH . 'core/');
	define('ENGINE_PATH', CORE_PATH . 'engine/');
	define('LIB_PATH', CORE_PATH . 'lib/');
	define('ROUTES_PATH', CORE_PATH . 'web/');
	define('CONTROLLERS_PATH', APPLICATION_PATH . 'controllers/');
	define('VIEWS_PATH', APPLICATION_PATH . 'views/');
	define('LAYOUTS_PATH', VIEWS_PATH . 'layouts/');
    define('LANGUAGE_PATH', APPLICATION_PATH . 'language/');
	define('MODELS_PATH', APPLICATION_PATH . 'models/');
	define('IMAGES_PATH', PUBLIC_PATH . 'images/');
	define('STYLES_PATH', PUBLIC_PATH . 'styles/');
	
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'pioneer');
	define('DB_PREFIX', 'st_');

	define('DS', DIRECTORY_SEPARATOR);