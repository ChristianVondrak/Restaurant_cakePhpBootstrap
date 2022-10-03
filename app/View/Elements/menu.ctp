<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link('Restaurante', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')) ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            <?php if($current_user['role']=='admin'): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ususarios <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista usuarios', array('controller' => 'users', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo usuario', array('controller' => 'users', 'action' => 'add')); ?></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meseros <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista meseros', array('controller' => 'meseros', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo mesero', array('controller' => 'meseros', 'action' => 'nuevo')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesas <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista mesas', array('controller' => 'mesas', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nueva mesa', array('controller' => 'mesas', 'action' => 'nuevo')); ?></li>
                    </ul>
                </li>
                <?php if($current_user['role']=='admin'): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cocineros <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista cocineros', array('controller' => 'cocineros', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo cocinero', array('controller' => 'cocineros', 'action' => 'add')); ?></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platillos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista platillos', array('controller' => 'platillos', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo platillo', array('controller' => 'platillos', 'action' => 'add')); ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('Lista Categoria', array('controller' => 'categoria_platillos', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link('Nueva Categoria', array('controller' => 'categoria_platillos', 'action' => 'add')); ?></li>
                    </ul>
                </li>
                <?php if($current_user['role']=='admin'): ?>
                <li><?php echo $this->Html->link('Lista de ordenes', array('controller' => 'ordens', 'action' => 'index')) ?></li>
                <?php endif; ?>
                <li>
                    <?php echo $this->Form->create('Platillo', array('type' => 'GET', 'class' => 'navbar-form nacbar-left', 'url' => array('controller' => 'platillos', 'action' => 'search'))); ?>
                    <div class="form-group">
                        <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar platillo...')); ?>
                    </div>
                    <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
                    <?php echo $this->Form->end(); ?>
                </li>
            </ul>
            <?php echo $this->Html->link(
                'Pedidos',
                array('controller' => 'pedidos', 'action' => 'view'),
                array('class' => 'btn btn-success navbar-btn')
            ); ?>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php echo $this->Html->link('Salir',array('controller'=>'users','action'=>'logout')); ?>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>