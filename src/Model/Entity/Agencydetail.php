<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agencydetail Entity
 *
 * @property int $id
 * @property int $id_users
 * @property string $firstname
 * @property string $lastname
 * @property string $jobtype
 * @property string $email
 * @property string $companyname
 * @property string $tradingname
 * @property string $companyweb
 * @property string $licensenumber
 * @property string $companyregistration
 * @property string $consortium
 * @property string $street
 * @property int $postcode
 * @property string $city
 * @property string $country
 * @property string $Ifother
 * @property string $state
 * @property string $phone
 * @property string $fax
 * @property string $aboutus
 * @property string $promotion
 * @property string $aboutusother
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Agencydetail extends Entity
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
