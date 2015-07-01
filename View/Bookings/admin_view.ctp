<div class="bookings view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Booking'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Booking'), array('action' => 'edit', $booking['Booking']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Bookings'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Booking'), array('action' => 'add'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Locations'), array('controller' => 'locations', 'action' => 'index'), array('escape' => false)); ?> </li>
										<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Location'), array('controller' => 'locations', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<td>
							<?php echo h($booking['Booking']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Name'); ?></th>
						<td>
							<?php echo h($booking['Booking']['name']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Phone'); ?></th>
						<td>
							<?php echo h($booking['Booking']['phone']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Email'); ?></th>
						<td>
							<?php echo h($booking['Booking']['email']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Delivery'); ?></th>
						<td>
							<?php echo h($booking['Booking']['delivery']); ?>
						</td>
					</tr>
					<tr>
								<th><?php echo __('Location'); ?></th>
								<td>
			<?php echo $this->Html->link($booking['Location']['name'], array('controller' => 'locations', 'action' => 'view', $booking['Location']['id'])); ?>
			&nbsp;
		</td>
					</tr>
					<tr>
						<th><?php echo __('Created'); ?></th>
						<td>
							<?php echo h($booking['Booking']['created']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Status'); ?></th>
						<td>
							<?php echo h($booking['Booking']['status']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

