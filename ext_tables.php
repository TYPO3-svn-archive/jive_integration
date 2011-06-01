<?php
if ( !defined ('TYPO3_MODE') ) {
	die ('Access denied.');
}

t3lib_extMgm::addPlugin( array( 'Jive Integration', 'jiveintegration_ce', t3lib_extMgm::extRelPath( $_EXTKEY ) . 'Resources/Public/Icons/jiveintegration_ce.gif' ), 'list_type' );

$TCA['tt_content']['types']['list']['subtypes_excludelist']['jiveintegration_ce'] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist']['jiveintegration_ce'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue( 'jiveintegration_ce', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/CommunityEverywhere.xml' );
?>