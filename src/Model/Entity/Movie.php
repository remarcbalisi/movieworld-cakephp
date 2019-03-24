<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Movie Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $screen_time
 * @property string|null $genre
 * @property string|null $casts
 * @property string|null $director
 * @property string|null $description
 * @property string|null $duration
 * @property float|null $price
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 * @property string|null $image
 *
 * @property \App\Model\Entity\Cinema[] $cinemas
 */
class Movie extends Entity
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
        'title' => true,
        'screen_time' => true,
        'genre' => true,
        'casts' => true,
        'director' => true,
        'description' => true,
        'duration' => true,
        'price' => true,
        'created_at' => true,
        'modified_at' => true,
        'image' => true,
        'cinemas' => true
    ];
}
