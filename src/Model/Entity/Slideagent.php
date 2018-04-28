<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slideagent Entity
 *
 * @property int $id
 * @property string $name_slide
 * @property string $image_slide
 * @property string $detail_slide
 * @property int $xoa
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modifine
 */
class Slideagent extends Entity
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
