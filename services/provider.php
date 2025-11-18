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

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Extension\PluginInterface;
use Joomla\Event\DispatcherInterface;
use Joomla\DI\ServiceProviderInterface;
use Joomla\DI\Container;
use TrueChristianBible\Plugin\System\GetBibleLoader\Extension\GetBibleLoader;

return new class () implements ServiceProviderInterface {
	/**
	* Registers the service provider with a DI container.
	*
	* @param   Container  $container  The DI container.
	*
	* @return  void
	* @since   4.3.0
	*/
	public function register(Container $container)
	{
		$container->set(
			PluginInterface::class,
			function (Container $container) {
				$plugin = new GetBibleLoader(
					$container->get(DispatcherInterface::class),
					(array) PluginHelper::getPlugin('system', 'getbibleloader')
				);
				$plugin->setApplication(Factory::getApplication());

				return $plugin;
			}
		);
	}
};
