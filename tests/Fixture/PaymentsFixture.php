<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'amount' => 1.5,
                'payment_date' => '2024-09-14',
                'payment_method' => 'Lorem ipsum dolor sit amet',
                'created' => 1726318794,
                'modified' => 1726318794,
            ],
        ];
        parent::init();
    }
}
