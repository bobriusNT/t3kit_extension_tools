<?php
namespace T3kit\T3kitExtensionTools\Xclass;
class Realurl extends \DmitryDulepov\Realurl\Utility {
	/**
	 * Converts a given string to a string that can be used as a URL segment.
	 * The result is not url-encoded.
	 *
	 * @param string $processedTitle
	 * @param string $spaceCharacter
	 * @param bool $strToLower
	 * @return string
	 */
	public function convertToSafeString($processedTitle, $spaceCharacter = '-', $strToLower = true) {
		$processedTitle = str_replace(array('ä','å','ö','Å','Ä','Ö'), array('a','a','o','a','a','o'),$processedTitle);
	  parent::convertToSafeString($processedTitle, $spaceCharacter = '-', $strToLower = true);
  }
}
