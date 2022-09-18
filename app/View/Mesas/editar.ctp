<h2>Editar mesa</h2>
<div class="col-md-3">
<?php 
echo $this->Form->create('Mesa');
echo $this->Form->input('codigo',['class'=>'form-control']);
echo $this->Form->input('puestos',['class'=>'form-control']);
echo $this->Form->input('posicion',['class'=>'form-control']);
echo $this->Form->input('mesero_id',['class'=>'form-control']);
echo $this->Form->end('Editar Mesa');

?>
</div>