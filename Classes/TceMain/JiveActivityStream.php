<?php
class Tx_JiveIntegration_TceMain_JiveActivityStream {
	public function processDatamap_afterDatabaseOperations( $status, $table, $id, $fieldArray, &$pObj ) {
		//call jive webservice
		
		//check access to the record (FE)
		//check whether to publish a be user's changes (f.e. via UserTS)
		//check whether to publish content from the current page (f.e. via PageTS)
	}
}
?>