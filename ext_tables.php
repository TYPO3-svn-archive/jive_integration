<?php
if ( !defined ('TYPO3_MODE') ) {
	die ('Access denied.');
}

$TCA['tt_content']['types']['list']['subtypes_excludelist']['jiveintegration_communityeverywhere'] = 'layout,select_key';
$TCA['tt_content']['types']['list']['subtypes_addlist']['jiveintegration_communityeverywhere'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( 'jiveintegration_communityeverywhere', 'FILE:EXT:' . $EXTKEY . '/Configuration/FlexForms/jiveintegration_communityeverywhere.xml' );
?>