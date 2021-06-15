<?php

/**
*
* @package NumPosts
* @copyright (c) 2020 DeaDRoMeO; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace deadromeo\number\event;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'								=> 'load_language_on_setup',			
		);
	}
public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'deadromeo/number',
			'lang_set' => 'number',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}	
	
}