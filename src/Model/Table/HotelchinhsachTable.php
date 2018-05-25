<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotelchinhsach Model
 *
 * @method \App\Model\Entity\Hotelchinhsach get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotelchinhsach newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hotelchinhsach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotelchinhsach|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotelchinhsach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelchinhsach[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelchinhsach findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelchinhsachTable extends Table
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

        $this->table('hotelchinhsach');
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
            ->requirePresence('namechinhsach', 'create')
            ->notEmpty('namechinhsach');

        $validator
            ->requirePresence('detailchinhsach', 'create')
            ->notEmpty('detailchinhsach');

      

        return $validator;
    }
}
