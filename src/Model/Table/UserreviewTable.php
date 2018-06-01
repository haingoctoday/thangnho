<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Userreview Model
 *
 * @method \App\Model\Entity\Userreview get($primaryKey, $options = [])
 * @method \App\Model\Entity\Userreview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Userreview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Userreview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Userreview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Userreview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Userreview findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserreviewTable extends Table
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

        $this->table('userreview');
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

        // $validator
        //     ->integer('id_activity')
        //     ->requirePresence('id_activity', 'create')
        //     ->notEmpty('id_activity');

        // $validator
        //     ->integer('id_user')
        //     ->requirePresence('id_user', 'create')
        //     ->notEmpty('id_user');

        // $validator
        //     ->requirePresence('review', 'create')
        //     ->notEmpty('review');

        // $validator
        //     ->integer('rating')
        //     ->requirePresence('rating', 'create')
        //     ->notEmpty('rating');

         return $validator;
    }
}
