<?php 
defined('ROOT_PATH') or exit('Direct access forbidden');

//path's
define('WEB_PROTOCOL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ?  'https' : 'http');
define('WEB_PATH',WEB_PROTOCOL.'://'.$_SERVER["SERVER_NAME"].'/');
define('CURRENT_DIRECTORY',dirname($_SERVER['PHP_SELF'])); //if proyect is in subfolder
define('COMPLETE_WEB_PATH',WEB_PROTOCOL.'://'.$_SERVER["SERVER_NAME"].CURRENT_DIRECTORY.'/');
define('COMPLETE_WEB_PATH_ADMIN',WEB_PROTOCOL.'://'.$_SERVER["SERVER_NAME"].CURRENT_DIRECTORY.'/'.ADMIN_FOLDER.'/');
define('VIEW_PATH',ROOT_PATH.'app/views/');
define('VIEW_FORM_PATH',ROOT_PATH.'app/views/forms/');
define('CONTROLLER_PATH',ROOT_PATH.'app/controllers/');
define('CONTROLLER_ADMIN_PATH',ROOT_PATH.'app/controllers/admincontrollers/');
define('MODEL_PATH',ROOT_PATH.'app/model/');
define('MODEL_ADMIN_PATH',ROOT_PATH.'app/model/adminmodels/');
define('CLASSES_PATH',ROOT_PATH.'app/classes/');
define('PUBLIC_PATH',ROOT_PATH.'app/public/');
define('PUBLIC_WEB_PATH',COMPLETE_WEB_PATH.'resources/');
define('CURRENT_DOMAIN',$_SERVER["SERVER_NAME"]);

define('LOG_PATH',ROOT_PATH.'logs/');

//map configuration
define('MAP_RESOURCES', array(
                        'css'=> array(
                        'leaflet/leaflet.css',
                        'https://unpkg.com/leaflet-geosearch@3.6.0/dist/geosearch.css',
                        ),
                        'js' => array(
                        'leaflet/leaflet.js',
                        'https://unpkg.com/leaflet-geosearch@3.6.0/dist/geosearch.umd.js'
                        )
                        )
       );

