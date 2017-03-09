<?php

/**
 * Class MyApiCallbacks
 */
class MyApiCallbacks
{
	/**
	 * @param mixed 	Wert aus Quelle
	 * @param array		Aktueller zu bearbeitender Datensatz
	 * @param object	Der API Job
	 */
	public function myFunction_1($varBefore,$arrData,$objJob)
	{
		// tabelle
		$strTable = $objJob->getTable();
		
		$varReturn = $varBefore;
		
		// überschreibe mich :)
		$varReturn = 'Ich bin Funktion 1';
		
		return $varReturn;
	}

	public function myFunction_2($varBefore,$arrData,$objJob)
	{
		$varReturn = $varBefore;
		#throw new \Exception('--- STOP ---');
		
		
		return 'Ich bin Funktion 2';
	}
}