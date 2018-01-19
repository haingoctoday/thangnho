<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hoteltienich Model
 *
 * @method \App\Model\Entity\Hoteltienich get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hoteltienich newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hoteltienich[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hoteltienich|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hoteltienich patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hoteltienich[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hoteltienich findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HoteltienichTable extends Table
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

        $this->table('hoteltienich');
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
            ->requirePresence('nametienich', 'create')
            ->notEmpty('nametienich');

        $validator
            ->requirePresence('detailtienich', 'create')
            ->notEmpty('detailtienich');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
