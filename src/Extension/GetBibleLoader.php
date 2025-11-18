<?php
/*----------------------------------------------------------------------------------|  io.vdm.dev  |----/
			Vast Development Method
/-------------------------------------------------------------------------------------------------------/

    @package    getBible.net

    @created    3rd December, 2015
    @author     Llewellyn van der Merwe <https://getbible.life>
    @git        Get Bible <https://git.vdm.dev/getBible>
    @github     Get Bible <https://github.com/getBible>
    @support    Get Bible <https://git.vdm.dev/getBible/support>
    @copyright  Copyright (C) 2015. All Rights Reserved
    @license    GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html

/------------------------------------------------------------------------------------------------------*/
namespace TrueChristianBible\Plugin\System\GetBibleLoader\Extension;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Html\HTMLHelper;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * System - GetBibleLoader plugin.
 *
 * @package   GetBibleLoader
 * @since     3.1.0
 */
final class GetBibleLoader extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
	protected  $app;

	/**
	 * This method is called before the head is compiled and allows manipulation of the head data.
	 * In this case, it's used to add a JavaScript file to the front end of the Joomla site.
	 *
	 * @return  void
	 *
	 * @since   3.0.0
	 * @throws  Exception on error.
	 */
	public function onBeforeCompileHead()
	{
		// Check if we are in the site application
		if ($this->app->isClient('site')) {
			HTMLHelper::_('script', 'https://cdn.jsdelivr.net/gh/getbible/loader@3.1.0/dist/js/getBible.min.js', ['version' => 'auto']);
		}
	}
}
