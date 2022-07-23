<?php
defined('_JEXEC') or die;

class RoeiplannerViewEvents extends JViewLegacy
{
	protected $items;

	protected $state;

	public function display($tpl = null)
	{
		$this->items		= $this->get('Items');
		$this->state		= $this->get('State');

		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		$this->addToolbar();
		$this->sidebar = JHtmlSidebar::render();
		parent::display($tpl);
	}

	protected function addToolbar()
	{
		$canDo	= RoeiplannerHelper::getActions();
		$bar = JToolBar::getInstance('toolbar');

		JToolbarHelper::title(JText::_('COM_ROEIPLANNER_MANAGER_EVENTS'), '');

		JToolbarHelper::addNew('event.add');

		if ($canDo->get('core.edit'))
		{
			JToolbarHelper::editList('event.edit');
		}
		if ($canDo->get('core.edit.state')) {

			JToolbarHelper::publish('events.publish', 'JTOOLBAR_PUBLISH', true);
			JToolbarHelper::unpublish('events.unpublish', 'JTOOLBAR_UNPUBLISH', true);

			JToolbarHelper::archiveList('events.archive');
			JToolbarHelper::checkin('events.checkin');
		}
		$state	= $this->get('State');
		if ($state->get('filter.state') == -2 && $canDo->get('core.delete'))
		{
			JToolbarHelper::deleteList('', 'events.delete', 'JTOOLBAR_EMPTY_TRASH');
		} elseif ($canDo->get('core.edit.state'))
		{
			JToolbarHelper::trash('events.trash');
		}
		if ($canDo->get('core.admin'))
		{
			JToolbarHelper::preferences('com_roeiplanner');
		}

		JHtmlSidebar::setAction('index.php?option=com_roeiplanner&view=events');

		JHtmlSidebar::addFilter(
			JText::_('JOPTION_SELECT_PUBLISHED'),
			'filter_state',
			JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true)
		);
	}

	protected function getSortFields()
	{
		return array(
			'a.ordering' => JText::_('JGRID_HEADING_ORDERING'),
			'a.state' => JText::_('JSTATUS'),
			'a.title' => JText::_('JGLOBAL_TITLE'),
			'a.id' => JText::_('JGRID_HEADING_ID')
		);
	}
}