<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EstadosTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('estados');
        $this->displayField('nome');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id'
        ]);
	}

	public function validationDefault(Validator $validator)
	{
		$validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')

            ->requirePresence('nome', 'create')
            ->notEmpty('nome')

            ->requirePresence('uf', 'create')
            ->notEmpty('uf');

        return $validator;
	}

}