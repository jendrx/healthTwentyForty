<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\StudiesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\StudiesController Test Case
 */
class StudiesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
