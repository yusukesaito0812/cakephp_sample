<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Questionnaire Entity
 *
 * @property int $id
 * @property string $title
 * @property string $contents
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 */
class Category extends Entity
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
