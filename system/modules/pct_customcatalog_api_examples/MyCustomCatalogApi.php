<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * CustomCatalog "Custom" API Example
 */
 

/**
 * Class MyCustomCatalogApi
 */
class MyCustomCatalogApi extends \PCT\CustomCatalog\API\Base
{
	/**
	 * Run
	 * {@inheritdoc}
	 * (is mandatory by interface)
	 */
	public function run()
	{
		print('Executed API: '.$this->id);
	}
}