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
            <a class="navbar-brand" href="#">Restaurant</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meseros <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista meseros',array('controller'=>'meseros','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo mesero',array('controller'=>'meseros','action'=>'nuevo')); ?></li>      
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesas <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista mesas',array('controller'=>'mesas','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Nueva mesa',array('controller'=>'mesas','action'=>'nuevo')); ?></li>      
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cocineros <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista cocineros',array('controller'=>'cocineros','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo cocinero',array('controller'=>'cocineros','action'=>'add')); ?></li>      
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platillos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Lista platillos',array('controller'=>'platillos','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Nuevo platillo',array('controller'=>'platillos','action'=>'add')); ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('Lista Categoria',array('controller'=>'categoria_platillos','action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('Nueva Categoria',array('controller'=>'categoria_platillos','action'=>'add')); ?></li>      
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>