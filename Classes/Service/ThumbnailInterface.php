<?php
namespace TYPO3\CMS\Media\Service;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 * @package media
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
interface ThumbnailInterface {

	/**
	 * Render a thumbnail of an image.
	 *
	 * @return string
	 */
	public function create();

	/**
	 * Tell to wrap the thumbnail or not.
	 *
	 * @param bool $wrap
	 * @return \TYPO3\CMS\Media\Service\ThumbnailInterface
	 */
	public function doWrap($wrap = TRUE);

	/**
	 * Tell whether the thumbnail is wrapped within an anchor tag.
	 *
	 * @return bool
	 */
	public function isWrapped();

	/**
	 * @return object
	 */
	public function getFile();

	/**
	 * @param object $file
	 * @return \TYPO3\CMS\Media\Service\ThumbnailInterface
	 */
	public function setFile($file);

	/**
	 * @return array
	 */
	public function getConfiguration();

	/**
	 * @param array $configuration
	 * @return \TYPO3\CMS\Media\Service\ThumbnailInterface
	 */
	public function setConfiguration($configuration);

	/**
	 * @return array
	 */
	public function getAttributes();

	/**
	 * @param array $attributes
	 * @return \TYPO3\CMS\Media\Service\ThumbnailInterface
	 */
	public function setAttributes($attributes);
}
?>