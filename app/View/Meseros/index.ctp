
<div class="page-header">
<h1>Lista de Meseros</h1>
</div>

<div class="col-md-12">
<table class="table">
    <thead>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Acciones</td>
        
    </tr>
    </thead>
    <tbody>
    <?php foreach($meseros as $mesero): ?>
        <tr>
            <td><?php echo $mesero['Mesero']['id']; ?></td>
            <td><?php echo $mesero['Mesero']['nombre']; ?></td>
            <td><?php echo $mesero['Mesero']['apellido']; ?></td>
            <td><?php echo $this->Html->link('Detalle ',array('controller'
            =>'meseros','action'=>'ver',$mesero['Mesero']['id']),array('class'=>'btn btn-default')); ?>
            
            <?php echo $this->Html->link(' Editar ',array('controller'
            =>'meseros','action'=>'editar',$mesero['Mesero']['id']),array('class'=>'btn btn-default')); ?>
            
            <?php echo $this->Form->postLink(' Eliminar',array('action'=>'eliminar', $mesero['Mesero']['id']),array('class'=>'btn btn-danger'),
             array('confirm'=> 'Eliminar a '.$mesero['Mesero']['nombre'].'?')) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
