<?php 
/*
 * Definition of important constants 
*/ 
define('URL','http://localhost/aventurateyvive/');

/*
 * Define name project
 */
define('NAME_PROJECT','Aventurate y vive tours');

/*
* Define system timezone
*/
date_default_timezone_set('America/Guayaquil');

/* 
* define the language
*/
define('LANG', 'es');

/*
* Parent and child directory paths
*/
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('LIBS', APP.'libs'.DS);
define('CONFIG', APP.'config'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('MODELS', APP.'models'.DS);
define('LANGUAGES', APP.'languages'.DS);


define('TEMPLATE', ROOT.'template'.DS);
define('INCLUDES', TEMPLATE.'includes'.DS);
define('VIEWS', TEMPLATE.'views'.DS);
define('MODULOS_ADMIN', TEMPLATE.'modulos_admin'.DS);
define('MODULOS_PAGE', TEMPLATE.'modulos_page'.DS);
define('UPLOADS_FILES', ROOT.'assets'.DS.'uploads'.DS);
define('UPLOADS_IMAGE_WEB', ROOT.'assets'.DS.'images'.DS.'web'.DS);

/*
* Paths with absoluted URL
*/
define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('FAVICON', ASSETS.'favicon/');
define('FONTS', ASSETS.'fonts/');
define('IMAGES', ASSETS.'images/');
define('JS', ASSETS.'js/');
define('PLUGINS', ASSETS.'plugins/');
define('UPLOADS', ASSETS.'uploads/');

/* 
 * Database Configuration
*/
define('DB_HOST','localhost');
define('DB_NAME','agencia_aventurate_vive');
define('DB_USER','admin_cms');
define('DB_PWD','d*e09LqhH_5H148X');
define('DB_CHARSET','utf8mb4');
/*
* Email configuration
*/
define('EMAIL_SENDER', 'Umbrella Framework');
define('EMAIL_USER', 'mysqlremote123@gmail.com');
define('EMAIL_PASSWORD', 'Milena200');
define('EMAIL_HOST', 'smtp.gmail.com');
define('EMAIL_PORT', '587');