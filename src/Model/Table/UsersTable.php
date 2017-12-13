<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator)
	{
		$validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')

            ->requirePresence('name', 'create')
            ->notEmpty('name')

            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')

            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone')

            ->requirePresence('username', 'create')
            ->notEmpty('username')

            ->requirePresence('password', 'create')
            ->notEmpty('password');

        return $validator;
	}

	public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
}