<?php
defined('_JEXEC') or die;

?>
<style>
	#jform_subject, #jform_location {
		width: 100%;
	}
	input[type="time"] {
		width: 65px;
		margin-left: 15px;
	}
	#allday {
		margin-left: 15px;
	}
	#allday-label {
		margin: 6px 0 0 6px;
		vertical-align: middle;
	}
	.btn-event_status .btn-success {
		background: #bd362f;
	}
	.btn-event_status .btn-success:hover {
		background: #802420;
	}
	.btn-event_status .btn-danger {
		background: #46a546;
	}
	.btn-event_status .btn-danger:hover {
		background: #2f6f2f;
	}
	.controls {
		 display:flex;
		 flex-direction: row;
	}
</style>
<form action="<?php echo JRoute::_('index.php?option=com_roeiplanner&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
	<div class="row-fluid">
		<div class="span10 form-horizontal">
			<fieldset>
				<?php echo JHtml::_('bootstrap.startPane', 'myTab', array('active' => 'details')); ?>

					<?php echo JHtml::_('bootstrap.addPanel', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_ROEIPLANNER_NEW_NATURAL_PERSON_ITEM', true) : JText::sprintf('COM_ROEIPLANNER_EDIT_NATURAL_PERSON_ITEM', $this->item->id, true)); ?>
				
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('id'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('id'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('person_id'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('person_id'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('first_name'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('first_name'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('middle_name'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('middle_name'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('last_name'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('last_name'); ?>
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('gender'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('gender'); ?>
							</div>
						</div>						
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('date_of_birth'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('date_of_birth'); ?>
							</div>
						</div>			
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('user_id'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('user_id'); ?>
							</div>
						</div>			
					<?php echo JHtml::_('bootstrap.endPanel'); ?>

					<input type="hidden" name="task" value="" />
					<?php echo JHtml::_('form.token'); ?>

				<?php echo JHtml::_('bootstrap.endPane'); ?>
			</fieldset>
		</div>
	</div>
</form>