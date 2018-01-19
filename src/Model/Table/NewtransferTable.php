<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newtransfer Model
 *
 * @method \App\Model\Entity\Newtransfer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newtransfer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Newtransfer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newtransfer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newtransfer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newtransfer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newtransfer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NewtransferTable extends Table
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

        $this->table('newtransfer');
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
            ->requirePresence('destination', 'create')
            ->notEmpty('destination');

        $validator
            ->requirePresence('pickupfrom', 'create')
            ->notEmpty('pickupfrom');

        $validator
            ->requirePresence('dropoffto', 'create')
            ->notEmpty('dropoffto');

        return $validator;
    }
}
