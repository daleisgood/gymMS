<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EquipmentBookings Model
 *
 * @property \App\Model\Table\MembersTable&\Cake\ORM\Association\BelongsTo $Members
 * @property \App\Model\Table\EquipmentTable&\Cake\ORM\Association\BelongsTo $Equipment
 *
 * @method \App\Model\Entity\EquipmentBooking newEmptyEntity()
 * @method \App\Model\Entity\EquipmentBooking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentBooking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentBooking get($primaryKey, $options = [])
 * @method \App\Model\Entity\EquipmentBooking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EquipmentBooking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentBooking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentBooking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EquipmentBooking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EquipmentBooking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EquipmentBooking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EquipmentBooking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EquipmentBooking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EquipmentBookingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('equipment_bookings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Equipment', [
            'foreignKey' => 'equipment_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('member_id')
            ->notEmptyString('member_id');

        $validator
            ->integer('equipment_id')
            ->notEmptyString('equipment_id');

        $validator
            ->date('booking_date')
            ->requirePresence('booking_date', 'create')
            ->notEmptyDate('booking_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('member_id', 'Members'), ['errorField' => 'member_id']);
        $rules->add($rules->existsIn('equipment_id', 'Equipment'), ['errorField' => 'equipment_id']);

        return $rules;
    }
}
