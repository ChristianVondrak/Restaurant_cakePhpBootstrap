<?php
$this->Paginator->options(
    array(
        'update' => '#contenedor-meseros',
        'before' => $this->Js->get('#procesando')->effect('fadeIn', array('buffer' => false)),
        'complete' => $this->Js->get('#procesando')->effect('fadeOut', array('buffer' => false))
    )
);
?>

<div id="contenedor-meseros">

    <div class="page-header col-md-offset-1">
        <h1>Lista de Meseros</h1>
    </div>
    <div class="row">
        <div class="col-md-9 col-md-offset-1">

        <div class="progress oculto" id="procesando">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
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
                    <?php foreach ($meseros as $mesero) : ?>
                        <tr>
                            <td><?php echo $mesero['Mesero']['id']; ?></td>
                            <td><?php echo $mesero['Mesero']['nombre']; ?></td>
                            <td><?php echo $mesero['Mesero']['apellido']; ?></td>
                            <td><?php echo $this->Html->link('Detalle ', array('controller'
                                => 'meseros', 'action' => 'ver', $mesero['Mesero']['id']), array('class' => 'btn btn-default')); ?>

                                <?php echo $this->Html->link(' Editar ', array('controller'
                                => 'meseros', 'action' => 'editar', $mesero['Mesero']['id']), array('class' => 'btn btn-default')); ?>

                                <?php echo $this->Form->postLink(
                                    ' Eliminar',
                                    array('action' => 'eliminar', $mesero['Mesero']['id']),
                                    array('class' => 'btn btn-danger'),
                                    array('confirm' => 'Eliminar a ' . $mesero['Mesero']['nombre'] . '?')
                                ) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php echo $this->Js->writeBuffer(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <?php echo $this->Html->link('Nuevo mesero', array('controller' => 'meseros', 'action' => 'nuevo'), array('class' => 'btn btn-success')); ?>
</div>