<?php
defined('_JEXEC') or die;

class RoeiplannerModelLegalPerson extends JModelAdmin
{
	protected $text_prefix = 'COM_ROEIPLANNER';

	public function getTable($type = 'LegalPerson', $prefix = 'RoeiplannerTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	public function getForm($data = array(), $loadData = true)
	{
		$app = JFactory::getApplication();

		$form = $this->loadForm('com_roeiplanner.legalPerson', 'legalPerson', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_roeiplanner.edit.legalPerson.data', array());

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
}