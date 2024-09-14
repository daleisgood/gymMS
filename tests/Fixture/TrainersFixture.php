<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainersFixture
 */
class TrainersFixture extends TestFixture
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
                'expertise' => 'Lorem ipsum dolor sit amet',
                'created' => 1726319358,
                'modified' => 1726319358,
            ],
        ];
        parent::init();
    }
}
