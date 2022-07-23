<?php
/**
 * @package     Roeiplanner.Site
 * @subpackage  com_roeiplanner
 *
 * @copyright   Copyright (C) 2005 - 2022 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>
<div class="page-header">
	<h1><?php echo $this->item->full_name; ?></h1>
</div>
<p><?php echo Text::_('COM_ROEIPLANNER_SHORT_NAME') .': '. $this->item->short_name; ?></p>
<p><?php echo Text::_('COM_ROEIPLANNER_SORT_NAME') .': '. $this->item->sort_name; ?></p>
<p><?php echo Text::_('COM_ROEIPLANNER_COC_NUMBER') .': '. $this->item->coc_number; ?></p>
<p><?php echo Text::_('COM_ROEIPLANNER_COC_NAME') .': '. $this->item->coc_name; ?></p>
<p><?php echo Text::_('COM_ROEIPLANNER_WEBSITE') .': '. $this->item->website; ?></p>
