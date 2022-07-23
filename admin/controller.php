<?php
defined('_JEXEC') or die;

class RoeiplannerController extends JControllerLegacy
{
	protected $default_view = 'legalPersons';

	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT.'/helpers/roeiplanner.php';

		$view   = $this->input->get('view', 'legalPersons');
		$layout = $this->input->get('layout', 'default');
		$id     = $this->input->getInt('id');

		if ($view == 'legalPerson' && $layout == 'edit' && !$this->checkEditId('com_roeiplanner.edit.legalPerson', $id))
		{
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php?option=com_roeiplanner&view=legalPersons', false));

			return false;
		}

		parent::display();

		return $this;
	}
}