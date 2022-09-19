<div class="page-header col-md-offset-1">
	<h1>Lista de Platillos</h1>
</div>

<div class="platillos index">
	<div class="row">
		<div class="col-md-9 col-md-offset-1">

			<table cellpadding="0" cellspacing="0" class="table">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
						<th><?php echo $this->Paginator->sort('precio'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('categoria_platillo_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($platillos as $platillo) : ?>
						<tr>
							<td><?php echo h($platillo['Platillo']['id']); ?>&nbsp;</td>
							<td><?php echo h($platillo['Platillo']['nombre']); ?>&nbsp;</td>
							<td><?php echo h($platillo['Platillo']['descripcion']); ?>&nbsp;</td>
							<td><?php echo h($platillo['Platillo']['precio']); ?>&nbsp;</td>
							<td><?php echo h($platillo['Platillo']['created']); ?>&nbsp;</td>
							<td><?php echo h($platillo['Platillo']['modified']); ?>&nbsp;</td>
							<td>
								<?php echo $this->Html->link($platillo['CategoriaPlatillo']['categoria'], array('controller' => 'categoria_platillos', 'action' => 'view', $platillo['CategoriaPlatillo']['id'])); ?>
							</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $platillo['Platillo']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $platillo['Platillo']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $platillo['Platillo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $platillo['Platillo']['id']))); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?> </p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
	</div>
</div>


<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Actions <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('New Platillo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('controller' => 'categoria_platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Platillo'), array('controller' => 'categoria_platillos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
	</ul>
</div>