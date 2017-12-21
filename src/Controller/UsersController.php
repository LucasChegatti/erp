<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
	public function index ()
	{
		$data = $this->paginate($this->Users);
		$this->set(['results'=> $data]);
	}

	public function view ($id = null)
	{
		$data = $this->Users->get($id);
		$this->set(['results'=>$data]);
	}

	public function login ()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
		}
	}

	public function add ()
	{
		$user = $this->Users->newEntity();

		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}
		$this->set(['user' => $user]);
	}

	public function edit ($id = null)
	{
		$user = $this->Users->get($id);
		if ($this->request->is(['post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				return $this->redirect([
					'action'=>'index'
				]);
			}
		}
		$this->set(['user' => $user]);
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['get', 'post', 'delete']);
		$user = $this->Users->get($id);
		$this->Users->delete($user);
		return $this->redirect([
			'action'=>'index'
		]);
	}

}
