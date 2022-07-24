<?php
/**
 * @package     Roeiplanner.Site
 * @subpackage  com_roeiplanner
 *
 * @copyright   Copyright (C) 2005 - 2022 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Roeiplanner\Component\Roeiplanner\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ListModel;

class LegalPersonsModel extends ListModel
{
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'person_id', 'a.person_id',
				'full_name', 'a.full_name',
				'short_name', 'a.short_name',
				'sort_name', 'a.sort_name',
				'website', 'a.website',
				'date_of_incorporation', 'a.date_of_incorporation',
				'closing_date', 'a.closing_date'
			);
		}

		parent::__construct($config);
	}

	protected function populateState($ordering = 'ordering', $direction = 'ASC')
	{
		$app = Factory::getApplication();

		// List state information
		$value = $app->input->get('limit', $app->get('list_limit', 0), 'uint');
		$this->setState('list.limit', $value);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$orderCol = $app->input->get('filter_order', 'a.id');

		if (!in_array($orderCol, $this->filter_fields))
		{
			$orderCol = 'a.id';
		}

		$this->setState('list.ordering', $orderCol);

		$listOrder = $app->input->get('filter_order_Dir', 'ASC');

		if (!in_array(strtoupper($listOrder), array('ASC', 'DESC', '')))
		{
			$listOrder = 'ASC';
		}

		$this->setState('list.direction', $listOrder);

		$params = $app->getParams();
		$this->setState('params', $params);

	}

	protected function getListQuery()
	{
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);

		$query->select(
			$this->getState(
				'list.select',
				'a.id, a.person_id, a.full_name, a.short_name, a.sort_name, a.website, a.date_of_incorporation, a.closing_date'
			)
		);
		$query->from($db->quoteName('#__legal_persons').' AS a');
		$query->order($db->escape('a.sort_name ASC'));
		return $query;
	}

	public function getStart()
	{
		return $this->getState('list.start');
	}
}
