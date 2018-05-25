<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotelcategory Model
 *
 * @method \App\Model\Entity\Hotelcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hotelcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hotelcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hotelcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hotelcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hotelcategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelcategoryTable extends Table
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

        $this->table('hotelcategory');
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
            ->requirePresence('namecategory', 'create')
            ->notEmpty('namecategory');

        $validator
            ->requirePresence('detailcategory', 'create')
            ->notEmpty('detailcategory');

      

        return $validator;
    }
}
