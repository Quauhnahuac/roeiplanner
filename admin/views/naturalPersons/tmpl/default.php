<?php
defined('_JEXEC') or die;

$listOrder	= '';
$listDirn	= '';
?>

<form action="<?php echo JRoute::_('index.php?option=com_roeiplanner&view=events'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-main-container" class="span10">
		<div class="clearfix"> </div>
		<table class="table table-striped" id="roeiplannerList">
			<thead>
				<tr>
					<th width="1%" class="hidden-phone">
						<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
					</th>
					<th class="title">
						<?php echo JHtml::_('grid.sort', 'COM_ROEIPLANNER_HEADING_TITLE', 'a.title', $listDirn, $listOrder); ?>
					</th>
					<th width="20%" class="nowrap hidden-phone">
						<?php echo JHtml::_('grid.sort', 'COM_ROEIPLANNER_HEADING_LOCATION', 'a.location', $listDirn, $listOrder); ?>
					</th>
					<th width="20%" class="nowrap hidden-phone">
						<?php echo JHtml::_('grid.sort', 'COM_ROEIPLANNER_HEADING_EVENT_START', 'a.event_start', $listDirn, $listOrder); ?>
					</th>
					<th width="20%" class="nowrap hidden-phone">
						<?php echo JHtml::_('grid.sort', 'COM_ROEIPLANNER_HEADING_EVENT_FINISH', 'a.event_finish', $listDirn, $listOrder); ?>
					</th>
					<th width="1%" class="nowrap center hidden-phone">
						<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $listDirn, $listOrder); ?>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($this->items as $i => $item) : ?>
				<tr class="row<?php echo $i % 2; ?>">
					<td class="center hidden-phone">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>
					<td class="nowrap">
						<a href="<?php echo JRoute::_('index.php?option=com_roeiplanner&task=event.edit&id='.(int) $item->id); ?>">
							<?php echo $this->escape($item->title); ?>
						</a>
					</td>
					<td class="hidden-phone">
						<?php echo $this->escape($item->location); ?>
					</td>
					<td class="hidden-phone">
						<?php echo date('Y-m-d H:i',strtotime($this->escape($item->event_start))); ?>
					</td>
					<td class="hidden-phone">
						<?php if ($item->event_finish != '0000-00-00 00:00:00') {echo date('Y-m-d H:i',strtotime($this->escape($item->event_finish)));} ?>
					</td>
					<td class="center hidden-phone">
						<?php echo (int) $item->id; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>