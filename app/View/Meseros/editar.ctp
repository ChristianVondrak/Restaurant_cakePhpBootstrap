<h2>Editar Mesero</h2>
<div class="col-md-3">
<?php 
    echo $this->Form->create('Mesero');
    echo $this->Form->input('dni',['class'=>'form-control']);
    echo $this->Form->input('nombre',['class'=>'form-control']);
    echo $this->Form->input('apellido',['class'=>'form-control']);
    echo $this->Form->input('telefono',['class'=>'form-control']);
    echo $this->Form->end('Editar Mesero');
?>
</div>
<?php 

echo $this->Html->link('Volver a lista de meseros',array(
    'controller'=>'meseros','action'=>'index'
));
?>