<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cruisedrive Model
 *
 * @method \App\Model\Entity\Cruisedrive get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cruisedrive newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cruisedrive[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cruisedrive|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cruisedrive patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cruisedrive[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cruisedrive findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CruisedriveTable extends Table
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

        $this->table('cruisedrive');
        $this->displayField('name');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('hinhanh', 'create')
            ->notEmpty('hinhanh');

        $validator
            ->requirePresence('detail', 'create')
            ->notEmpty('detail');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
