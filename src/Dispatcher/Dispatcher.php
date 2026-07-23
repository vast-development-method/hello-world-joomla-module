<?php
/*----------------------------------------------------------------------------------|  www.vdm.io  |----/
				VDM 
/-------------------------------------------------------------------------------------------------------/

	@version		6.0.0
	@build			23rd July, 2026
	@created		20th July, 2026
	@package		Hello World
	@subpackage		Dispatcher.php
	@author			Llewellyn <https://www.vdm.io>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
  ____  _____  _____  __  __  __      __       ___  _____  __  __  ____  _____  _  _  ____  _  _  ____ 
 (_  _)(  _  )(  _  )(  \/  )(  )    /__\     / __)(  _  )(  \/  )(  _ \(  _  )( \( )( ___)( \( )(_  _)
.-_)(   )(_)(  )(_)(  )    (  )(__  /(__)\   ( (__  )(_)(  )    (  )___/ )(_)(  )  (  )__)  )  (   )(  
\____) (_____)(_____)(_/\/\_)(____)(__)(__)   \___)(_____)(_/\/\_)(__)  (_____)(_)\_)(____)(_)\_) (__) 

/------------------------------------------------------------------------------------------------------*/
namespace JCB\Module\SiteRedirect\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * [VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaSix\Module\Dispatcher 93] Dispatcher class for Siteredirect
 *
 * @since  5.3.0
 */
class Dispatcher extends AbstractModuleDispatcher
{

	/**
	 * [VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaSix\Module\Dispatcher 120] Returns the layout data.
	 *
	 * @return  array
	 *
	 * @since   5.3.0
	 */
	protected function getLayoutData(): array
	{
		$data = parent::getLayoutData();



/***[JCBGUI.joomla_module.layout_data.9.$$$$]***/
		// get the set values form cpanel redirect module
		$redirect = $data['params']->get('redirect',null);

		// redirect if the user is in given selected group
		if ($redirect && is_object($redirect) && count((array)$redirect) > 0)
		{
			// set the user object
			$user = $data['app']->getIdentity();
			// get user groups
			$groups = (array) $user->getAuthorisedGroups();
			// loop over the set values
			foreach ($redirect as $go)
			{
				if (is_object($go))
				{
					if (is_array($go->groups) && count($go->groups))
					{
						if (array_intersect($go->groups, $groups))
						{
							// match found - redirect
							$data['app']->redirect($go->url);
							break;

						}
					}
				}
			}
		}/***[/JCBGUI$$$$]***/


		return $data;
	}
}
