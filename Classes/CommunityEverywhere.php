<?php
class Tx_JiveIntegration_CommunityEverywhere {
	public function main( $content, $conf ) {
		$settings = $conf['settings.'];
		return $this->renderCommunityEverwhereTag($jiveUrl, $jiveCommunity, $ceType, $ident);
	}

	public function renderCommunityEverwhereTag( $jiveUrl, $jiveCommunity, $ceType, $ident, $jiveForumId=0 ) {
		return '<script></script>';
	}
} 
?>