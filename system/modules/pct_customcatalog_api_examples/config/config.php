<?php

/**
 * Register new API
 */
$GLOBALS['PCT_CUSTOMCATALOG']['API']['myApi'] = array
(
	'label'		=> &$GLOBALS['TL_LANG']['PCT_CUSTOMCATALOG']['API']['myApi'],
	'class'		=> 'MyCustomCatalogApi', // The default class if no callbacks for modes have been registered
	'key'		=> array
	(
		'run'  => array('MyApiBackendPage','render_run')
	),
);

/**
 * Register API Callbacks
 */
$GLOBALS['PCT_CUSTOMCATALOG_API']['HOOKS']['myCallback_1'] = array('MyApiCallbacks','myFunction_1');
$GLOBALS['PCT_CUSTOMCATALOG_API']['HOOKS']['myCallback_2'] = array('MyApiCallbacks','myFunction_2');
