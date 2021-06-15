<?php

/**
 *
 * @package NumPosts
 * @copyright (c) 2021 DeaDRoMeO; hello-vitebsk.ru
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge($lang, array(
	'POST_LINK'					=> 'Ссылка на сообщение',
));
