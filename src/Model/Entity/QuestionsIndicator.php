<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuestionsIndicator Entity
 *
 * @property int $id
 * @property float $default_value
 * @property float $default_max_value
 * @property float $default_min_value
 * @property int $question_id
 * @property int $indicator_id
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\Indicator $indicator
 */
class QuestionsIndicator extends Entity
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
