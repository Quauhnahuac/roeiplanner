<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

?>
<style>

</style>

<table class="datasheet">
	<thead>
		<tr>
			<th id="table-selector"></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_FULL_NAME'); ?></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_SHORT_NAME'); ?></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_SORT_NAME'); ?></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_WEBSITE'); ?></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_DATE_OF_INCORPORATION'); ?></th>
			<th class="column-selector"><?php echo Text::_('COM_ROEIPLANNER_CLOSING_DATE'); ?></th>		
		</tr>
	</thead>
	<tbody>
	<?php foreach ($this->items as $id => $item) :	?>
		<tr>
			<td class="row-selector"></td>
			<td class="cell"><?php echo $item->full_name; ?></td>
			<td class="cell"><?php echo $item->short_name; ?></td>
			<td class="cell"><?php echo $item->sort_name; ?></td>
			<td class="cell"><?php echo $item->website; ?></td>
			<td class="cell"><?php echo $item->date_of_incorporation; ?></td>
			<td class="cell"><?php echo $item->closing_date; ?></td>
		</tr>
	<?php endforeach; ?>
		<tr>
			<td class="row-selector">*</td>
			<td class="cell"></td>
			<td class="cell"></td>
			<td class="cell"></td>
			<td class="cell"></td>
			<td class="cell"></td>
			<td class="cell"></td>
		</tr>
	</tbody>
</table>

<script>
var d = document.getElementById("table-selector");
d.onclick = function(){
	const nodeList = document.querySelectorAll(".cell");
	for (let i=0; i < nodeList.length; i++) {
		nodeList[i].style.backgroundColor = "#0078d7";
		nodeList[i].style.color = "#ffffff";
	}
};
</script>
