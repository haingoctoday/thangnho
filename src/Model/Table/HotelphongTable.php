<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotelphong Model
 *
 * @method \App\Model\Entity\Hotelphong get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotelphong newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hotelphong[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotelphong|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotelphong patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelphong[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelphong findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelphongTable extends Table
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

        $this->table('hotelphong');
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
            ->requirePresence('nameroom', 'create')
            ->notEmpty('nameroom');

        $validator
            ->requirePresence('detailroom', 'create')
            ->notEmpty('detailroom');
        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
