<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
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
                'session_id' => 1,
                'booking_date' => '2024-09-14',
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => 1726319694,
                'modified' => 1726319694,
            ],
        ];
        parent::init();
    }
}
