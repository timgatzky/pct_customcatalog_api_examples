<?php

// config.php
$GLOBALS['CUSTOMCATALOG_HOOKS']['dataOutput'][] = array('MyClass', 'myDataOutputCallback');

// MyClass.php
public function myDataOutputCallback($arrSet, $objApi)
{
	if($objApi->getTable() == 'my_cc_table')
	{
		foreach($arrSet as $i => $data)
		{
			// override pid to 10
			$data['pid'] = 10;
			
			$arrSet[$i] = $data;
		}
	}
   
	return $arrSet;
}


// config.php
$GLOBALS['CUSTOMCATALOG_HOOKS']['apiComplete'][] = array('MyClass', 'myApiCompleteCallback');

// MyClass.php
public function myApiCompleteCallback($objApi)
{
	if($objApi->getTable() == 'my_cc_table')
	{
		// do something
	}
}