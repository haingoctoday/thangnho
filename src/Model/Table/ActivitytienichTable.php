<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activitytienich Model
 *
 * @method \App\Model\Entity\Activitytienich get($primaryKey, $options = [])
 * @method \App\Model\Entity\Activitytienich newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Activitytienich[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Activitytienich|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Activitytienich patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Activitytienich[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Activitytienich findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActivitytienichTable extends Table
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

        $this->table('activitytienich');
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
