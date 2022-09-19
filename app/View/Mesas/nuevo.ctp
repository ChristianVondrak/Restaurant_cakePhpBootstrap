<h2>Crear Mesa</h2>
<div class="col-md-3">
    <?php
    $options = array(
        'label' => 'Crear Mesa',
        'div' => array(
            'class' => 'btn btn-success',

        )
    );
    echo $this->Form->create('Mesa');
    echo $this->Form->input('codigo', ['class' => 'form-control']);
    echo $this->Form->input('puestos', ['class' => 'form-control']);
    echo $this->Form->input('posicion', ['class' => 'form-control'], array('rows' => 3));
    echo $this->Form->input('mesero_id', ['class' => 'form-control']);
    echo $this->Form->end($options, array(
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        )
    ))
    ?>
    <div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Actions <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Mesa'), array('controller' => 'mesas', 'action' => 'nuevo')); ?> </li>
	</ul>
</div>
</div>
</div>
<br>


<?php
echo $this->Html->link('Volver a la lista de mesas', array('controller' => 'mesas', 'action' => 'index'))
?>