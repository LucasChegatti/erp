<?php

namespace App\Controller;

use App\Controller\AppController;

class FuncionariosController extends AppController
{
	public function index ()
	{
		$this->paginate = [
			'contain' => [
				'Cargos',
				'Horarios'
			]
		];
		$data = $this->paginate($this->Funcionarios);
		$this->set(['results'=>$data]);
	}

	public function view ($id = null)
	{
		$results = $this->Funcionarios->get($id, [
            'contain' => ['Cargos', 'Horarios', 'Cidades', 'Estados']
        ]);

		$this->set('results', $results);

		$data = $this->Funcionarios->get($id);
		$this->set(['result' => $data]);
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['get', 'post', 'delete']);
		$user = $this->Funcionarios->get($id);
		$this->Funcionarios->delete($user);
		return $this->redirect([
			'action' => 'index'
		]);
	}

	public function edit ($id = null)
	{
		$funcionarios = $this->Funcionarios->get($id);
		if ($this->request->is(['post', 'put'])) {
			$funcionarios = $this->Funcionarios->patchEntity($funcionarios, $this->request->data);
			if ($this->Funcionarios->save($funcionarios)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}
		$estados = $this->seleciona_estado();
		$cidades = $this->seleciona_cidade();
		$cargos = $this->seleciona_cargo();
		$horarios = $this->seleciona_horario();
		$this->set(compact('funcionarios', 'estados', 'cidades', 'cargos', 'horarios'));
	}

	public function add ()
	{
		$funcionarios = $this->Funcionarios->newEntity();

		if ($this->request->is('post')) {
			$funcionarios = $this->Funcionarios->patchEntity($funcionarios, $this->request->data);
			if ($this->Funcionarios->save($funcionarios)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}
		$estados = $this->seleciona_estado();
		$cidades = $this->seleciona_cidade();
		$cargos = $this->seleciona_cargo();
		$horarios = $this->seleciona_horario();
		$this->set(compact('funcionarios', 'estados', 'cidades', 'cargos', 'horarios'));
	}

	private function seleciona_estado() {

        $this->loadModel('Estados');
        $estado = $this->Estados->find('list')
                        ->order('nome')
                        ->distinct(['id'])
                        ->toArray();

        return $estado;
    }

    private function seleciona_cidade() {

        $this->loadModel('Cidades');
        $cidade = $this->Cidades->find('list')
                        ->order('nome')
                        ->distinct(['id'])
                        ->toArray();

        return $cidade;
    }

    private function seleciona_cargo() {

        $this->loadModel('Cargos');
        $cargo = $this->Cargos->find('list')
                        ->order('nome')
                        ->distinct(['id'])
                        ->toArray();

        return $cargo;
    }

    private function seleciona_horario() {

        $this->loadModel('Horarios');
        $horario = $this->Horarios->find('list')
                        ->order('descricao')
                        ->distinct(['id'])
                        ->toArray();

        return $horario;
    }
}
