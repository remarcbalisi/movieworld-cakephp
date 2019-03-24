<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Cinema Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int $movie_id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 *
 * @property \App\Model\Entity\Movie $movie
 * @property \App\Model\Entity\Order[] $orders
 */
class Cinema extends Entity
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
        'name' => true,
        'movie_id' => true,
        'created_at' => true,
        'modified_at' => true,
        'movie' => true,
        'orders' => true
    ];

    public function getMovieById($movie_id)
    {
        $movie = TableRegistry::get('Movies')->find()->where(['id', $this->movie_id])
        ->first();
        return $movie;
    }
}
