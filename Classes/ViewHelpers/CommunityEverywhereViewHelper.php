<?php

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

class Tx_JiveIntegration_ViewHelpers_CommunityEverywhereViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * 
	 * Enter description here ...
	 * @param string $jiveUrl
	 * @param integer $jiveCommunity
	 * @param integer $ceMode
	 * @param string $jiveDiscussionIdent
	 * @param integer $jiveForumId
	 * @author Daniel Regelein <daniel.regelein@diehl-informatik.de>
	 */
	public function render( $jiveUrl, $jiveCommunity, $ceMode='1804', $jiveDiscussionIdent=null, $jiveForumId=0 ) {
		$ceApi = t3lib_div::makeInstance( 'Tx_JiveIntegration_CommunityEverywhere' );
		
		return $ceApi->renderCommunityEverwhereTag( 
			$jiveUrl, 
			$jiveCommunity, 
			$ceMode, 
			$jiveDiscussionIdent,
			$jiveForumId 
		);
	}
}
?>