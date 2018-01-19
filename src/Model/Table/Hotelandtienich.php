<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newhotel Model
 *
 * @method \App\Model\Entity\Newhotel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newhotel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Newhotel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newhotel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newhotel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newhotel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newhotel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelandtienichTable extends Table
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

        $this->table('hotelandtienich');
        $this->displayField('id');
        $this->primaryKey('id');

      //  $this->addBehavior('Timestamp');
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
        return $validator;
    }
}
