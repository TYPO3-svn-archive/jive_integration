<?php
if ( !defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:jive_integration/Classes/TceMain/JiveActivityStream.php:tx_JiveIntegration_TceMain_JiveActivityStream';


?>