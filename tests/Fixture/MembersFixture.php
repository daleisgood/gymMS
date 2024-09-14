<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersFixture
 */
class MembersFixture extends TestFixture
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
                'user_id' => 1,
                'membership_id' => 1,
                'start_date' => '2024-09-14',
                'end_date' => '2024-09-14',
                'created' => 1726318773,
                'modified' => 1726318773,
            ],
        ];
        parent::init();
    }
}
