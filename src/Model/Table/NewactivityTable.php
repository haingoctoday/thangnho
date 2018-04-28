<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newactivity Model
 *
 * @method \App\Model\Entity\Newactivity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newactivity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Newactivity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newactivity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newactivity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newactivity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newactivity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NewactivityTable extends Table
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

        $this->table('newactivity');
        $this->displayField('name');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('diachi', 'create')
            ->notEmpty('diachi');

        $validator
            ->requirePresence('mota', 'create')
            ->notEmpty('mota');

        // $validator
        //     ->requirePresence('pdf', 'create')
        //     ->notEmpty('pdf');

        $validator
            ->requirePresence('songay', 'create')
            ->notEmpty('songay');

        $validator
            ->requirePresence('lichtrinh', 'create')
            ->notEmpty('lichtrinh');

        $validator
            ->requirePresence('diemdon', 'create')
            ->notEmpty('diemdon');

        $validator
            ->requirePresence('thoigiandon', 'create')
            ->notEmpty('thoigiandon');

        $validator
            ->requirePresence('tansuat', 'create')
            ->notEmpty('tansuat');

        $validator
            ->requirePresence('thongtinbosung', 'create')
            ->notEmpty('thongtinbosung');

        $validator
            ->integer('sokhach')
            ->requirePresence('sokhach', 'create')
            ->notEmpty('sokhach');

        // $validator
        //     ->requirePresence('hinhanh', 'create')
        //     ->notEmpty('hinhanh');

        $validator
            ->integer('danhgia')
            ->requirePresence('danhgia', 'create')
            ->notEmpty('danhgia');

        return $validator;
    }
}
