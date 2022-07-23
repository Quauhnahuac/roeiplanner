<?php
defined('_JEXEC') or die;

class RoeiplannerModelLegalPersons extends JModelList
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
}