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
		print("Executed API: ".$this->id."<br>");
		
		// create a backup record
		if($this->backup)
		{
			$intBackup = $this->createBackup();
			
			print("Backup created in tl_undo.id=".$intBackup."<br>");
			
		}
	}
}