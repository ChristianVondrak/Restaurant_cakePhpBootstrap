<?php  
class MeserosController extends AppController{

    public $helpers = array('Html','Form', 'Time','Js');
    public $components = array('Session','Paginator','RequestHandler');
    public $paginate = array(
        'limit'=>3,
        'order'=>array(
            'Mesero.id'=>'asc'
        )
    );

    public function isAuthorized($user)
	{
		if($user['role'] == 'user')
		{
			if(in_array($this->action, array('nuevo', 'index', 'ver', 'editar')))
			{
				return true;
			}
			else
			{
				if($this->Auth->user('id'))
				{
					$this->Session->setFlash('No puede acceder', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		
		return parent::isAuthorized($user);
	}

    public function index(){
        // $this->set('meseros',$this->Mesero->find('all'));
        $this->Mesero->recursive = 0;

        $this->paginate['Mesero']['limit']=3;
        $this->paginate['Mesero']['order']=array('Mesero.id'=>'asc');
        $this->set('meseros',$this->paginate());
    }


    public function ver($id=null){
       if(!$id){
        throw new NotFoundException('Datos Invalidos');
       } 
       $mesero=$this->Mesero->findById($id);

       if (!$mesero) {
        throw new Exception("El mesero no existe", 1);    
       }
       $this->set('mesero',$mesero);
    }

    public function nuevo(){
        if ($this->request->is('post')) {
            $this->Mesero->create();
            if($this->Mesero->save($this->request->data)){
                $this->Session->setFlash('El mesero ha sido creado','default', array('class'=>'success'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('No se pudo crear el Mesero');

        }
    }

    public function editar($id = null){
        if(!$id){
            throw new NotFoundException("Datos invalidos");
        }
        $mesero = $this->Mesero->findById($id);
        if (!$mesero) {
            throw new NotFoundException("Mesero no encontrado");
        }

        if($this->request->is(array('post','put'))){
            $this->Mesero->id=$id;
            if($this->Mesero->save($this->request->data)){
                $this->Session->setFlash('El mesero ha sido modificado','default', array('class'=>'success'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('No se pudo modificar el Mesero');
        }
        if(!$this->request->data){
            $this->request->data = $mesero;

        }
    }

    public function eliminar($id=null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException('INCORRECTO');
        }

        if($this->Mesero->delete($id)){
            $this->Session->setFlash('El mesero ha sido eliminado','default', array('class'=>'success'));
            return $this->redirect(array('action'=>'index'));
        }

    }
}


