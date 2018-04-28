<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slideagent Model
 *
 * @method \App\Model\Entity\Slideagent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Slideagent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Slideagent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slideagent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slideagent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Slideagent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slideagent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SlideagentTable extends Table
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

        $this->table('slideagent');
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
            ->requirePresence('name_slide', 'create')
            ->notEmpty('name_slide');

      

        $validator
            ->requirePresence('detail_slide', 'create')
            ->notEmpty('detail_slide');

      

      

        return $validator;
    }
}
