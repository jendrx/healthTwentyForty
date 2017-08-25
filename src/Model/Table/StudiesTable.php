<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Studies Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\RoundsTable|\Cake\ORM\Association\HasMany $Rounds
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Study get($primaryKey, $options = [])
 * @method \App\Model\Entity\Study newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Study[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Study|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Study patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Study[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Study findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudiesTable extends Table
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

        $this->setTable('studies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->hasMany('Rounds', [
            'foreignKey' => 'study_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'study_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_studies'
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
            ->notEmpty('seats')
            ->greaterThan('seats',0, 'Seats must be greater than zero');

        $validator
            ->dateTime('completed')
            ->allowEmpty('completed');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }

    public function isFull($studyId)
    {
        $usersStudies = TableRegistry::get('UsersStudies');
        $seats = $this->get($studyId)->seats;
        $count = $usersStudies->find('all', ['conditions' => ['study_id' => $studyId]])->count();
        return $seats == $count;
    }

    public function listAll()
    {
        return $this->find('list');
    }
}
