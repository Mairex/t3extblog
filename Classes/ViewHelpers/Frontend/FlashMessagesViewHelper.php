<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014-2015 Felix Nagel <info@felixnagel.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * View helper which renders the flash messages
 *
 * Extended to use Twitter Bootstrap CSS classes
 */
class Tx_T3extblog_ViewHelpers_Frontend_FlashMessagesViewHelper extends Tx_Fluid_ViewHelpers_FlashMessagesViewHelper {

	/**
	 * @var array
	 */
	protected $severityMapping = array(
		t3lib_FlashMessage::NOTICE => 'alert-info',
		t3lib_FlashMessage::INFO => 'alert-info',
		t3lib_FlashMessage::OK => 'alert-success',
		t3lib_FlashMessage::WARNING => 'alert-warning',
		t3lib_FlashMessage::ERROR => 'alert-error'
	);

	/**
	 * Initialize arguments
	 *
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();

		// Add default Bootstrap alert classes
		$this->overrideArgument('class', 'string', 'CSS class(es) for this element', FALSE, 'alert alert-block');

		// Register role attribute for better a11y
		$this->registerArgument('role', 'string', 'ARIA role for this element', FALSE, 'alert');
	}

	/**
	 * Renders FlashMessages and flushes the FlashMessage queue
	 * Note: This disables the current page cache in order to prevent FlashMessage output
	 * from being cached.
	 *
	 * @see \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController::no_cache
	 * @throws \TYPO3\CMS\Fluid\Core\ViewHelper\Exception
	 *
	 * @param string $renderMode one of the RENDER_MODE_* constants
	 * @return string rendered Flash Messages, if there are any.
	 */
	public function render($renderMode = self::RENDER_MODE_DIV) {
		$flashMessages = $this->controllerContext->getFlashMessageQueue()->getAllMessages();
		if ($flashMessages === NULL || count($flashMessages) === 0) {
			return '';
		}

		// Add role attribute
		$this->tag->addAttribute('role', $this->arguments['role']);

		/* @var $singleFlashMessage \TYPO3\CMS\Core\Messaging\FlashMessage */
		foreach ($flashMessages as $singleFlashMessage) {
			$this->arguments['class'] .= ' ' . $this->getSeverityClass($singleFlashMessage->getSeverity());
		}

		return parent::render($renderMode);
	}

	/**
	 * @param integer $severity
	 *
	 * @return string
	 */
	protected function getSeverityClass($severity) {
		if (array_key_exists($severity, $this->severityMapping)) {
			return $this->severityMapping[$severity];
		}

		return '';
	}
}

?>
