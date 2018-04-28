<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newcruise Entity
 *
 * @property int $id
 * @property string $portto
 * @property string $portend
 * @property string $price
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modifine
 * @property string $loai
 */
class Newcruise extends Entity
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
        'id' => false
    ];
}
