<div class="beers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Beer'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;' . __('Edit Beer'), array('action' => 'edit', $beer['Beer']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;' . __('Delete Beer'), array('action' => 'delete', $beer['Beer']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $beer['Beer']['id'])); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;' . __('List Beers'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;' . __('New Beer'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
							<?php echo h($beer['Beer']['id']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Name'); ?></th>
						<td>
							<?php echo h($beer['Beer']['name']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Price'); ?></th>
						<td>
							<?php echo h($beer['Beer']['price']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Desc'); ?></th>
						<td>
							<?php echo h($beer['Beer']['desc']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Ord'); ?></th>
						<td>
							<?php echo h($beer['Beer']['ord']); ?>
						</td>
					</tr>
					<tr>
						<th><?php echo __('Url'); ?></th>
						<td>
							<?php echo h($beer['Beer']['url']); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- end col md 9 -->

	</div>
</div>

