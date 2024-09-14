<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $membership_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Membership $membership
 * @property \App\Model\Entity\Attendance[] $attendance
 * @property \App\Model\Entity\Booking[] $bookings
 * @property \App\Model\Entity\EquipmentBooking[] $equipment_bookings
 * @property \App\Model\Entity\Payment[] $payments
 */
class Member extends Entity
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
        'user_id' => true,
        'membership_id' => true,
        'start_date' => true,
        'end_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'membership' => true,
        'attendance' => true,
        'bookings' => true,
        'equipment_bookings' => true,
        'payments' => true,
    ];
}
