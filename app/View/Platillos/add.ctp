<div class="row platillos form col-sm-8 col-sm-offset-2">
	<?php echo $this->Form->create('Platillo'); ?>
	<fieldset>
		<legend><?php echo __('Add Platillo'); ?></legend>
		<?php
		echo $this->Form->input('nombre', ['class' => 'form-control']);
		echo $this->Form->input('descripcion', ['class' => 'form-control']);
		echo $this->Form->input('precio', ['class' => 'form-control']);
		echo $this->Form->input('categoria_platillo_id', ['class' => 'form-control']);
		echo $this->Form->input('Cocinero', ['class' => 'form-control']);
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="btn-group col-sm-8 col-sm-offset-2 btn-action">
	<div class="row">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Actions <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('List Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
	</ul>
	</div>
</div>