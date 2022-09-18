<div class="page-header">
<h2>Crear Mesero</h2>
</div>

<div class="col-md-3">
<?php 
    echo $this->Form->create('Mesero');
    echo $this->Form->input('dni',['class'=>'form-control']);
    echo $this->Form->input('nombre',['class'=>'form-control']);
    echo $this->Form->input('apellido',['class'=>'form-control']);
    echo $this->Form->input('telefono',['class'=>'form-control']);
    echo $this->Form->end('Crear Mesero',['class'=>'btn btn-default']);
?>
</div>