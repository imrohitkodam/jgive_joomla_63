<?php
/**
 * @package     Techjoomla.Libraries
 * @subpackage  Object
 *
 * @author      Techjoomla <extensions@techjoomla.com>
 * @copyright   Copyright (C) 2009 - 2019 Techjoomla. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('JPATH_PLATFORM') or die();

use Joomla\CMS\Object\CMSObject;

/**
 * Legacy compatibility file for TechJoomla object classes
 * 
 * In Joomla 4+, CMSObject is the standard object class.
 * This file ensures backward compatibility for any legacy code
 * that might reference this file directly.
 *
 * @since  1.0.0
 * @deprecated  Use Joomla\CMS\Object\CMSObject directly
 */
if (!class_exists('TJObject'))
{
	/**
	 * Legacy TJObject class - alias for CMSObject
	 *
	 * @deprecated  Use Joomla\CMS\Object\CMSObject directly
	 */
	class TJObject extends CMSObject
	{
		// This class exists for backward compatibility only
		// All functionality is provided by CMSObject
	}
}

