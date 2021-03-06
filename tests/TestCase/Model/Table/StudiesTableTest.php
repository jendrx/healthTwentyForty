<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudiesTable Test Case
 */
class StudiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudiesTable
     */
    public $Studies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.studies',
        'app.categories',
        'app.questions',
        'app.rounds',
        'app.indicators',
        'app.questions_indicators',
        'app.users',
        'app.users_studies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Studies') ? [] : ['className' => StudiesTable::class];
        $this->Studies = TableRegistry::get('Studies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Studies);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test isFull method
     *
     * @return void
     */
    public function testIsFull()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test listAll method
     *
     * @return void
     */
    public function testListAll()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
