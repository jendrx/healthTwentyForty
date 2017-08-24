<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionsIndicators Model
 *
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\BelongsTo $Questions
 * @property \App\Model\Table\IndicatorsTable|\Cake\ORM\Association\BelongsTo $Indicators
 *
 * @method \App\Model\Entity\QuestionsIndicator get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionsIndicator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuestionsIndicator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsIndicator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionsIndicator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsIndicator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsIndicator findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionsIndicatorsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('questions_indicators');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id'
        ]);
        $this->belongsTo('Indicators', [
            'foreignKey' => 'indicator_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->numeric('default_value')
            ->greaterThanOrEqual('default_value',0)
            ->lessThanOrEqual('default_value',1)
            ->notEmpty('default_value');

        $validator
            ->numeric('default_max_value')
            ->greaterThanOrEqual('default_max_value',0)
            ->lessThanOrEqual('default_max_value',1)
            ->notEmpty('default_max_value');

        $validator
            ->numeric('default_min_value')
            ->greaterThanOrEqual('default_min_value',0)
            ->lessThanOrEqual('default_min_value',1)
            ->notEmpty('default_min_value');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['question_id'], 'Questions'));
        $rules->add($rules->existsIn(['indicator_id'], 'Indicators'));

        return $rules;
    }
}
