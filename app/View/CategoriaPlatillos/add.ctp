<div class="row">

	<div class="categoriaPlatillos form col-md-6 col-md-offset-3">
		<?php echo $this->Form->create('CategoriaPlatillo'); ?>
		<fieldset>
			<legend><?php echo __('Add Categoria Platillo'); ?></legend>
			<br />
			<?php
			echo $this->Form->input('categoria', ['class' => 'form-control']);
			?>
		</fieldset>
		<br />
	</div>
</div>
<div class="row">
<div class="col-md-2 col-md-offset-3">
	<?php echo $this->Form->end(array('label' => 'Crear Categoría', 'class' => 'btn btn-success')); ?>
</div>

<div class="col-md-2">
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Actions <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>