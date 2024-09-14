<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipmentBookingsFixture
 */
class EquipmentBookingsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'member_id' => 1,
                'equipment_id' => 1,
                'booking_date' => '2024-09-14',
                'created' => 1726318765,
                'modified' => 1726318765,
            ],
        ];
        parent::init();
    }
}
