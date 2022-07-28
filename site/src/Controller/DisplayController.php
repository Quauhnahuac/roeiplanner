<?php
namespace Roeiplanner\Component\Roeiplanner\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

class DisplayController extends BaseController
{
	public function mapsearch()
    {
        if (!JSession::checkToken('get')) 
        {
            echo new JResponseJson(null, JText::_('JINVALID_TOKEN'), true);
        }
        else 
        {
            parent::display();
        }
    }
	
	public function display($cachable = false, $urlparams = array())
	{
		return parent::display();
	}
}
