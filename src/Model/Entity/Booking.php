<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $id
 * @property int $member_id
 * @property int $session_id
 * @property \Cake\I18n\FrozenDate $booking_date
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Member $member
 * @property \App\Model\Entity\Class $class
 * @property \App\Model\Entity\Equipment[] $equipment
 */
class Booking extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'member_id' => true,
        'session_id' => true,
        'booking_date' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'member' => true,
        'class' => true,
        'equipment' => true,
    ];
}
