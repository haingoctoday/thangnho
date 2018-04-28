<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cruiseport Model
 *
 * @method \App\Model\Entity\Cruiseport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cruiseport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cruiseport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cruiseport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cruiseport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cruiseport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cruiseport findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CruiseportTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('cruiseport');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('portname', 'create')
            ->notEmpty('portname');

        $validator
            ->requirePresence('portdetail', 'create')
            ->notEmpty('portdetail');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
