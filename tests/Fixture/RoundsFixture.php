<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoundsFixture
 *
 */
class RoundsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'number' => ['type' => 'smallinteger', 'length' => 5, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'completed' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'study_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'question_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'rounds_question_id_fkey' => ['type' => 'foreign', 'columns' => ['question_id'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'rounds_study_id_fkey' => ['type' => 'foreign', 'columns' => ['study_id'], 'references' => ['studies', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'number' => 1,
            'completed' => 1504017615,
            'study_id' => 1,
            'question_id' => 1
        ],
    ];
}
