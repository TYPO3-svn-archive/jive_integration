<?php
class Tx_JiveIntegration_CommunityEverywhere {
	
	private static $ALLOWED_CE_TYPES = array( '1801', '1802', '1804' );
	
	
	public function main( $content, $conf ) {
		$settings = $conf['settings.'];
		
			//called as plugin --> flexform values have to be used
		if ( strstr( $this->cObj->currentRecord, 'tt_content' ) ) {
			return 'Called as Plugin';
		} else {
			return 'Called via TS';
		}
		
		$jiveDiscussionIdent = $settings['jiveDiscussionIdent'] ? $settings['jiveDiscussionIdent'] : '';
		return $this->renderCommunityEverwhereTag( $settings['jiveUrl'], $settings['jiveCommunity'], $settings['jiveCeMode'], $jiveDiscussionIdent );
	}

	
	/**
	 * 
	 * @internal
	 * $ceMode
	 * 	1801	Display "Discuss This" Link
	 *  1802	Display "Discuss This" Link and Recent Posts
	 *  1804	Display "Discuss This" Link, Recent Posts, and Comment Box
	 */
	public function renderCommunityEverwhereTag( $jiveUrl, $jiveCommunity, $ceMode='1804', $jiveDiscussionIdent=null, $jiveForumId=0 ) {
		
		if( !in_array( $ceType, self::$ALLOWED_CE_TYPES ) ) {
			$ceMode = '1804';
		}
		if( empty( $jiveDiscussionIdent ) ) {
			$jiveDiscussionIdent = $this->buildDiscussionIdentifier();
		}
		
		$scriptUrl = (
			$jiveUrl . '/' . 
			'everywhere' . '/' . 
			$ceMode . 
			'?community=' . $jiveCommunity . 
			( $jiveForumId ? '&forum=' . $jiveForumId : '' ) .
			'&key=' . $jiveDiscussionIdent
		);
		
		return '<script type="text/javascript" src="' . $scriptUrl . '"></script>';
	}
	
	
	private function buildDiscussionIdentifier() {
		return 'T3' . $GLOBALS['TSFE']->id;
	}
} 
?>