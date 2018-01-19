<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hoteldiachi Model
 *
 * @method \App\Model\Entity\Hoteldiachi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hoteldiachi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hoteldiachi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hoteldiachi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hoteldiachi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hoteldiachi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hoteldiachi findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HoteldiachiTable extends Table
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

        $this->table('hoteldiachi');
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
            ->requirePresence('diachi', 'create')
            ->notEmpty('diachi');

        $validator
            ->requirePresence('mota', 'create')
            ->notEmpty('mota');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('loai', 'create')
            ->notEmpty('loai');

        return $validator;
    }
}
