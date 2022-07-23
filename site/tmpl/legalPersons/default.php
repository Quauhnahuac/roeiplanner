<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

HTMLHelper::_('behavior.core');

?>
<h1><?php echo Text::_('COM_ROEIPLANNER_LEGAL_PERSONS'); ?></h1>
<div>
	<?php
		echo $this->loadTemplate('items');
	?>
</div>
