<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencydetail Model
 *
 * @method \App\Model\Entity\Agencydetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agencydetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agencydetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agencydetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agencydetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agencydetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agencydetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgencydetailTable extends Table
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

        $this->table('agencydetail');
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
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

     
       

        $validator
            ->allowEmpty('companyname');

        $validator
            ->allowEmpty('tradingname');

        $validator
            ->allowEmpty('companyweb');

        $validator
            ->allowEmpty('licensenumber');

        $validator
            ->allowEmpty('companyregistration');

        $validator
            ->allowEmpty('consortium');

        $validator
            ->allowEmpty('street');

     
        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('country');

    

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('phone');

     

        $validator
            ->allowEmpty('aboutus');

        $validator
            ->allowEmpty('promotion');

        $validator
            ->allowEmpty('aboutusother');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
