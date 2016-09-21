<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * CustomCatalog "Custom" API Example
 */

/**
 * Register new API
 */
$GLOBALS['PCT_CUSTOMCATALOG']['API']['myApi'] = array
(
	'label'		=> &$GLOBALS['TL_LANG']['PCT_CUSTOMCATALOG']['API']['myApi'],
	'class'		=> 'MyCustomCatalogApi', // The default class if no callbacks for modes have been registered
);