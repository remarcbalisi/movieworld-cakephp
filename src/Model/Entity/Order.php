<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Order Entity
 *
 * @property int $id
 * @property string|null $code
 * @property int|null $pieces
 * @property int $user_id
 * @property int $cinema_id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Cinema $cinema
 */
class Order extends Entity
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
        'code' => true,
        'pieces' => true,
        'user_id' => true,
        'cinema_id' => true,
        'created_at' => true,
        'modified_at' => true,
        'user' => true,
        'cinema' => true
    ];
}
