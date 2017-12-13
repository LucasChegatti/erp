<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FuncionariosTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('funcionarios');
        $this->displayField('nome');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Cargos', [
            'foreignKey' => 'cargo_id'
        ]);
        $this->belongsTo('Horarios', [
            'foreignKey' => 'horario_id'
        ]);
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id'
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id'
        ]);
	}

	public function validationDefault(Validator $validator)
	{
		$validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')

            ->requirePresence('nome', 'create')
            ->notEmpty('nome')

            ->requirePresence('sobrenome', 'create')
            ->notEmpty('sobrenome')

            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf')

            ->requirePresence('rg', 'create')
            ->notEmpty('rg')

            ->requirePresence('salario', 'create')
            ->notEmpty('salario')

            ->requirePresence('data_entrada', 'create')
            ->notEmpty('data_entrada')

            ->requirePresence('data_saida', 'create')
            ->allowEmpty('data_saida')

            ->requirePresence('telefone_celular', 'create')
            ->allowEmpty('telefone_celular')

            ->requirePresence('telefone_residencial', 'create')
            ->allowEmpty('telefone_residencial')

            ->requirePresence('email', 'create')
            ->allowEmpty('email')

            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco')

            ->requirePresence('cep', 'create')
            ->notEmpty('cep')

			->requirePresence('ativo', 'create')
            ->allowEmpty('atvo');

        return $validator;
	}

}
