<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttendanceFixture
 */
class AttendanceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'attendance';
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
                'check_in' => '2024-09-14 12:57:07',
                'check_out' => '2024-09-14 12:57:07',
                'created' => 1726318627,
                'modified' => 1726318627,
            ],
        ];
        parent::init();
    }
}
