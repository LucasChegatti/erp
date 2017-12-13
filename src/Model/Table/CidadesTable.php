<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CidadesTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('cidades');
        $this->displayField('nome');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

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
            ->notEmpty('nome');

        return $validator;
	}

}