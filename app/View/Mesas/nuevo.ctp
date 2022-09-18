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
    echo $this->Form->input('codigo',['class'=>'form-control']);
    echo $this->Form->input('puestos',['class'=>'form-control']);
    echo $this->Form->input('posicion',['class'=>'form-control'], array('rows'=>3));
    echo $this->Form->input('mesero_id',['class'=>'form-control']);
    echo $this->Form->end($options,array(
        'inputDefaults' => array(
            'label' => false,
            'div' => false
        )
    ))
?>
</div>
<br>


<?php 
    echo $this->Html->link('Volver a la lista de mesas', array('controller'=>'mesas','action'=>'index'))
?>