<div class="bookings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
									<ul class="nav nav-pills pull-right">
							<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;' . __('List Bookings'), array('action'=>'index'), array('escape'=>false)); ?></li>
					</ul>
								<h1><?php echo __('Admin Add Booking'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<?php echo $this->element('admin_navigation'); ?>
					</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Booking', array('role'=>'form', 'class'=>'form-horizontal')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class'=>'form-control', 'placeholder'=>__('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class'=>'form-control', 'placeholder'=>__('Phone')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class'=>'form-control', 'placeholder'=>__('Email')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('delivery', array(
						'type' => 'text',
						'data-provide' => 'datepicker',
						'data-date-language' => Configure::read('Config.locale'),
						'class' => 'form-control',
						'label' => __('Delivery'),
						'placeholder' => __('Delivery'),
						'inputGroup' => array('append'=>'glyphicon-th'),
						//BEWARE: datepicker needs JS initialization
					));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('location_id', array('class'=>'form-control', 'placeholder'=>__('Location Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class'=>'form-control', 'placeholder'=>__('Status')));?>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary')); ?>
					</div>

				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
