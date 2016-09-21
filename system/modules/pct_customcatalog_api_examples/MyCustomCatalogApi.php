<?php

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