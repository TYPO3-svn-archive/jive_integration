<?php
if ( !defined( 'TYPO3_MODE' ) ) {
	die ( 'Access denied.' );
}


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:jive_integration/Classes/TceMain/JiveActivityStream.php:tx_JiveIntegration_TceMain_JiveActivityStream';



if( !t3lib_extMgm::isLoaded( 'extbase' ) ) {
	t3lib_extMgm::addPItoST43( 'jiveintegration', 'EXT:' . $_EXTKEY . '/Classes/CommunityEverywhere.php', '_ce', 'list_type', 1 );
} else {
	#Tx_Extbase_Utility_Extension::configurePlugin(
	#	$_EXTKEY,
	#	'communityeverywhere',
	#	array(
	#		'CE' => 'main',
	#	)
	#);
}
?>