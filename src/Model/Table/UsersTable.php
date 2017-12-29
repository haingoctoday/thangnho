<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Usersm Model
 *
 * @method \App\Model\Entity\Usersm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usersm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usersm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usersm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usersm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usersm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usersm findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->table('usersm');
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
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required');
          //  ->notEmpty('role', 'A role is required')
           // ->add('role', 'inList', [
            //    'rule' => ['inList', ['admin', 'author']],
           //     'message' => 'Please enter a valid role'
           // ]);
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }

    public function validationPassword(Validator $validator)
    {
        $validator
                ->add('old_password','custom',[
                    'rule' => function($value, $context){
                        $user = $this->get($context['data']['id']);
                        if($user)
                        {
                            if((new DefaultPasswordHasher)->check($value, $user->password))
                            {
                                return true;
                            }
                        }
                        return false;
                    },
                    'message' => 'Your old password does not match the entered password!',
                ])
                ->notEmpty('old_password');
        
        $validator
                ->add('password1',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Please enter atleast 4 characters in password your password.'
                    ]
                ])
                ->add('password1',[
                    'match' => [
                        'rule' => ['compareWith','password2'],
                        'message' => 'Sorry! Password dose not match. Please try again!'
                    ]
                ])
                ->notEmpty('password1');
        
        $validator
                ->add('password2',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Please enter atleast 4 characters in password your password.'
                    ]
                ])
                ->add('password2',[
                    'match' => [
                        'rule' => ['compareWith','password1'],
                        'message' => 'Sorry! Password dose not match. Please try again!'
                    ]
                ])
                ->notEmpty('password2');
        
        return $validator;
    }
}
