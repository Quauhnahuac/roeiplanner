<?php
defined('_JEXEC') or die;

class RoeiplannerHelper
{
	public static function getActions($categoryId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_roeiplanner';
		$level = 'component';

		$actions = JAccess::getActions('com_roeiplanner', $level);

		foreach ($actions as $action)
		{
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}
}