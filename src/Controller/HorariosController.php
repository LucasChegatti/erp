<?php

namespace App\Controller;

use App\Controller\AppController;

class HorariosController extends AppController
{
	public function index ()
	{
		$data = $this->paginate($this->Horarios);
		$this->set(['result'=>$data]);
	}

	public function view ($id = null)
	{
		$data = $this->Horarios->get($id);
		$this->set(['result'=>$data]);
	}

	public function add ()
	{
		$horario = $this->Horarios->newEntity();
		if ($this->request->is('post')){
			$horario = $this->Horarios->patchEntity($horario, $this->request->data);
			if ($this->Horarios->save($horario)) {
				return $this->redirect([
					'action'=>'index'
				]);
			}
		}
		$this->set(['horario'=>$horario]);
	}

	public function edit ($id = null)
	{
		$horario = $this->Horarios->get($id);
		if ($this->request->is(['post', 'put'])){
			$horario = $this->Horarios->patchEntity($horario, $this->request->data);
			if ($this->Horarios->save($horario)) {
				return $this->redirect([
					'action'=>'index'
				]);
			}
		}
		$this->set(['horario'=>$horario]);
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['post', 'get', 'delete']);
		$horario = $this->Horarios->get($id);
		$this->Horarios->delete($horario);
		return $this->redirect([
			'action'=>'index'
		]);
	}

}
