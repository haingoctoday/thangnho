<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newhotel Entity
 *
 * @property int $id
 * @property string $namehotel
 * @property string $diachi
 * @property string $mota
 * @property string $hinhanh
 * @property string $hinhanhnho
 * @property string $thongtinhotel
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $saohotel
 */
class Newhotel extends Entity
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
