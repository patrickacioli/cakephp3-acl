<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifield
 * @property string|null $observation
 * @property int|null $quantity
 * @property string|null $type
 * @property int $product_id
 * @property int $user_id
 * @property int $client_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 */
class Transaction extends Entity
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
        'created' => true,
        'modifield' => true,
        'observation' => true,
        'quantity' => true,
        'type' => true,
        'product_id' => true,
        'user_id' => true,
        'client_id' => true,
        'product' => true,
        'user' => true,
        'client' => true
    ];
}
