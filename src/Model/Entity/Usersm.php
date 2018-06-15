<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher; //include this line

/**
 * Usersm Entity
 *
 * @property int $id
 * @property string $email
 * @property string $tendangnhap
 * @property string $images
 * @property string $password
 * @property string $fullName
 * @property string $phanloai
 * @property string $phone
 * @property int $status
 * @property int $admin_check
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Usersm extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
       'password' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

   protected function _setPassword($password)
    {
        //print_r("123123");
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
