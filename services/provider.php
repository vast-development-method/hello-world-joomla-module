<?php
/*----------------------------------------------------------------------------------|  www.vdm.io  |----/
				VDM 
/-------------------------------------------------------------------------------------------------------/

	@version		6.0.0
	@build			23rd July, 2026
	@created		20th July, 2026
	@package		Hello World
	@subpackage		provider.php
	@author			Llewellyn <https://www.vdm.io>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
  ____  _____  _____  __  __  __      __       ___  _____  __  __  ____  _____  _  _  ____  _  _  ____ 
 (_  _)(  _  )(  _  )(  \/  )(  )    /__\     / __)(  _  )(  \/  )(  _ \(  _  )( \( )( ___)( \( )(_  _)
.-_)(   )(_)(  )(_)(  )    (  )(__  /(__)\   ( (__  )(_)(  )    (  )___/ )(_)(  )  (  )__)  )  (   )(  
\____) (_____)(_____)(_/\/\_)(____)(__)(__)   \___)(_____)(_/\/\_)(__)  (_____)(_)\_)(____)(_)\_) (__) 

/------------------------------------------------------------------------------------------------------*/

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\ServiceProviderInterface;
use Joomla\DI\Container;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * [VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaSix\Module\Provider 83] The Siteredirect module service provider
 *
 * @since   5.4.0
 */
return new class () implements ServiceProviderInterface {
	/**
	 * [VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaSix\Module\Provider 89] Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since   5.4.0
	 */
	public function register(Container $container)
	{
		$container->registerServiceProvider(new ModuleDispatcherFactory('\\JCB\\Module\\SiteRedirect'));

		$container->registerServiceProvider(new Module());
	}
};
