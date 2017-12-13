<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class HorariosTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('horarios');
        $this->displayField('descricao');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator)
	{
		$validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')

            ->requirePresence('hora_inicio', 'create')
            ->notEmpty('hora_inicio')

            ->requirePresence('intervalo', 'create')
            ->notEmpty('intervalo')

            ->requirePresence('hora_fim', 'create')
            ->notEmpty('hora_fim')

            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
	}

}