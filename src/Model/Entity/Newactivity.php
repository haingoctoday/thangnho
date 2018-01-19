<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newactivity Entity
 *
 * @property int $id
 * @property string $name
 * @property string $diachi
 * @property string $mota
 * @property string $pdf
 * @property string $songay
 * @property string $lichtrinh
 * @property string $diemdon
 * @property string $thoigiandon
 * @property string $tansuat
 * @property string $thongtinbosung
 * @property int $sokhach
 * @property string $hinhanh
 * @property int $danhgia
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Newactivity extends Entity
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
