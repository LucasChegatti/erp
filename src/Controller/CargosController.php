<?php

namespace App\Controller;

use App\Controller\AppController;

class CargosController extends AppController
{
	public function index ()
	{
		$data = $this->paginate($this->Cargos);
		$this->set(['result'=> $data]);
	}

	public function view ($id = null)
	{
		$data = $this->Cargos->get($id);
		$this->set(['result' => $data]);
	}

	public function add ()
	{
		$cargo = $this->Cargos->newEntity();

		if ($this->request->is('post')) {
			$cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
			if ($this->Cargos->save($cargo)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}
		$this->set(['cargo' => $cargo]);
	}

	public function edit ($id = null)
	{
		$cargo = $this->Cargos->get($id);

		if ($this->request->is(['post', 'put'])) {
			$cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
			if ($this->Cargos->save($cargo)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}
		$this->set(['cargo' => $cargo]);
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['post', 'get', 'delete']);
		$cargo = $this->Cargos->get($id);
		$this->Cargos->delete($cargo);
		return $this->redirect([
			'action'=>'index'
		]);
	}
}
